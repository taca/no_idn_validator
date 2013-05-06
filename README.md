# No IDN validator

## Introduction

No IDN validator is an extension for Contao Open Source CMS.


## Function

This extension provides two validators to Form generator:

* E-mail address without IDN
* URL format without IDN

Theses validators are different from standard "E-mail address" and "URL
format" in that they don't handle IDN (Internationalizing Domain Names).

Standard validators decode IDN to ACE (ASCII Compatible Encoding) before
validate it, but there is a case IDN wouldn't be acceptable.  So I started
to write this extension while I submitted the ticket to request a feature
for Contao (http://dev.contao.org/issues/2749) and it was rejected
instantly.  :-)

(Yes, I feel it is somewhat negative idea as fo I18N, but sadly it is
still needed by "the real world" yet.)

## License

License is the same as Contao Open Source CMS; GNU LGPL 2 or later.
