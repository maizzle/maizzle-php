---
extends: _layouts.letter
title: Simple content-focused newsletter
preheader: This month's words of wisdom
googleFonts: ['Roboto', 'Open+Sans']
headline: This is an example of using layouts as templates in Maizzle, to only write emails in Markdown
---

[SEE THE DOCS &rarr;](https://maizzle.com/docs/) {.text-teal .no-underline .hover-text-teal-light}

**But, why?**
Good question. This is useful if your email focuses on text content, and if your layout doesn't need to change much.
Instead of always writing table structures, simply code your template as a layout, and then write Markdown emails.

**OK, how do I do it?**
Check out the `letter.blade.php` layout - it's an entire table structure that `yield`s this text.
Create a `letter.blade.md` (or just a `letter.md`) in your `emails` folder, and have it extend the letter layout by adding the following Front Matter variable:

```
extends: _layouts.letter
```

**Any drawbacks?**
Well, if you want to style elements in Markdown, you'll need to write them as HTML (you can use Tailwind too).
While Jigsaw does provide Parsedown Extra by default, we had to disable it because it currently has some issues with Outlook-specific comments.

**Anything else?**
Using `.blade.md` files allows you to use all the Blade cool stuff. If you don't need that, simply create `.md` files.
