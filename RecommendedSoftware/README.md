# Recommended Software
These are my personal preferences which I suggest for those with a similar taste in minimalism and extensibility.

Operating Systems:
* Void Linux (glibc for 32-bit musl for 64-bit)
* OpenBSD
* Alpine Linux
* Hyperbola GNU/Linux

Shells:
* dash/Busybox's ash (should be the default shell regardless of login/user shell)
* es/Plan 9's rc (should NEVER be the default shell on Linux or BSD)
* OpenBSD's ksh and its forks/ports: loksh, mksh, pdksh
* fish (bloated but worth it)

Coreutils (alternatives to GNU):
* Busybox
* Plan 9

libc (alternatives to glibc):
* musl-libc
* dietlibc
* uClibc

https://etalab.net/compare_libcs.html

C compilers (alternatives to gcc):
* tcc
* 9c

Init Systems (alternatives to SystemD):
* runit
* OpenRC

Programming Languages:
* task automation: POSIX-compliant shell scripts *(rather than Python)*
* scientific computing: C (with gnuplot), Julia, R *(rather than MatLab, Octave, numpy/scipy/matplotlib or whatever)*
* server-side: nodejs, PHP *(rather than Ruby on Rails, Python, ASP)*
* general purpose: C, Go *(rather than Java, C++, Python)*
* regular expressions: Perl, awk, sed *(rather than Python)*

Terminal Emulators:
* Suckless's st
* xterm
* kitty (bloated but may be worth it if you have a lot of spare RAM)

Text Editors:
* neovim
* nvi
* joe
* sam
* ed

File Managers:
* vifm *(rather than ranger, lf, nnn, or just using the shell)*

Readers:
* zathura (for DjVu, pdf, ps)
* less (for text files or stdin)

Browsers:
* GNU Icecat
* Firefox *(with heavy customization)*
* TorBrowser *(rather than using VPN services)*

*Avoid Brave or "ungoogled" Chromium:*
https://wiki.hyperbola.info/doku.php?id=en:main:chromiums_freedom_flaws

Firefox Extenstions:
* Vim Vixen *(rather than Tridactyl)*
* uBlock Origin *(rather than NoScript, AdBlockPlus, etc.)*
* Privacy Badger
* HTTPS Everywhere
* Dark Reader

Search Engines:
* Startpage/searx
* Qwant
* DuckDuckGo (Lite SSL)
* DuckDuckGo (HTML SSL)
