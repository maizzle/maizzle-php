---
title: Confirm your email
preheader: Please verify your email address with us
bodyClasses: bg-grey-light
permalink: emails/subfolder/example.html
---

<table class="wrapper w-full bg-grey-light all-font-sans" cellpadding="0" cellspacing="0" lang="{{ $page->language ?? 'en' }}" role="presentation">
  <tr>
    <td class="sm-w-full py-48" align="center">
      <table class="w-600 sm-w-full" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
          <td align="left" class="px-24">
            <table class="w-full bg-white rounded-sm shadow" cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <td class="py-2 bg-blue rounded-t-sm"></td>
              </tr>
              <tr>
                <td align="center" class="px-24 py-64 sm-px-12">
                  <table class="w-full" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td align="center" class="px-8">
                          <h2 class="text-xl mt-0">👋 there, John!</h2>
                          <p class="m-0 text-lg text-grey-darker leading-normal">Please click the following link to confirm that john@example.com is your email address:</p>
                        </td>
                    </tr>
                  </table>
                  <div class="sm-py-12 sm-leading-0" style="line-height: 32px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th class="bg-green hover-bg-green-dark rounded-full" style="mso-padding-alt: 14px 48px;">
                        <a href="http://example.com" class="block py-14 px-48 text-white text-base leading-full no-underline">Confirm Email</a>
                      </th>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <table class="w-600 sm-w-full" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
          <td align="center" class="text-xs text-grey-dark p-24 leading-24">
            <p class="m-0 text-base">
               If this email doesn't make any sense, please <a href="https://example.com" class="text-blue hover-no-underline">let us know</a>!
            </p>
          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
