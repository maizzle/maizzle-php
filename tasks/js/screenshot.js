let fs = require('fs');
let path = require('path');
let mkdirp = require('mkdirp');
let slugify = require('slugify');
let requireg = require('requireg');
let readline = require('readline');
let execSync = require('child_process').execSync;

let puppeteer;
let rl = readline.createInterface({input: process.stdin, output: process.stdout});

try {
  puppeteer = requireg('puppeteer');
} catch (er) {
  puppeteer = null
}

if (!puppeteer) {
  rl.question('Screenshot uses Puppeteer, which needs to download a recent version of Chromium (~170Mb Mac, ~282Mb Linux, ~280Mb Win).\n\nConfirm download? (y/n): ', (answer) => {
    switch (answer) {
      case 'y':
        console.log('\nInstalling Puppeteer. This will take a while depending on your internet connection...');
        execSync('npm install puppeteer -g');
        console.log('\nPuppeteer is now installed, please run the screenshot command again.');
        break;
      case 'n':
        console.log('\nYou will need to confirm the download in order to use Screenshot.');
        break;
    }
    rl.close();

    process.exit();
  });
}

if (puppeteer) {

  let args = process.argv.slice(2).map(arg => {
    return arg.split(/=(.+)/).filter(n =>{ return n != '' });
  });
  args = args.reduce((result, item, index, array) => {
    result[item[0]] = item[1];
    return result;
  }, {});

  if (!args.file) {
    console.log('No input file specified.');
    process.exit();
  }

  if(!fs.existsSync(args.file)) {
    console.error('File not found:', path.join(process.cwd(), args.file));
    process.exit();
  }

  let outputFolder = args.output ? args.output : './screenshots/' + path.dirname(args.file.split('/').splice(1).join('/'));
  if(!fs.existsSync(outputFolder)) {
    mkdirp.sync(outputFolder);
  }

  let config = JSON.parse(execSync('php ./tasks/php/config -elocal'));

  if (!config || config.screenshots.devices.length < 1) {
    console.log('\nScreenshot aborted: could not get devices list from config.php.\n');
    process.exit();
  }

  (async () => {
    let timestamp = Date.now();
    let devices = await requireg('puppeteer/DeviceDescriptors');
    let browser = await puppeteer.launch();
    let page = await browser.newPage();
    await page.goto( path.join(process.cwd(), args.file) );

    for (let device of config.screenshots.devices) {
      if (!devices[device]) {
        console.log(device, 'is not a valid Puppeteer device descriptor. Skipping...');
      } else {
        console.log('Processing', device, 'screenshot...');
        let outputFilePath = path.join(
                              outputFolder,
                              slugify(path.basename(args.file , '.html') + ' ' + device + ' ' + timestamp, {lower: true}) + '.' + config.screenshots.type || 'png'
                            )
        await page.emulate(devices[device]);

        // dumb workaround because you can't have 'quality' if using png screenshots
        if (config.screenshots.type.match(/jpe?g/)) {
          await page.screenshot({
            path: path.join(
                    outputFolder,
                    slugify(
                      path.basename(args.file , '.html')
                      + ' ' + device + ' '
                      + timestamp,
                      {lower: true}
                    )
                    + '.jpg'
                  ),
            quality: config.screenshots.quality,
            fullPage: true
          });
        }
        else {
          await page.screenshot({
            path: path.join(
                    outputFolder,
                    slugify(
                      path.basename(args.file , '.html')
                      + ' ' + device + ' '
                      + timestamp,
                      {lower: true}
                    )
                    + '.png'
                  ),
            fullPage: true
          });
        }
      }
    }

    await browser.close();

    process.exit();
  })();
}
