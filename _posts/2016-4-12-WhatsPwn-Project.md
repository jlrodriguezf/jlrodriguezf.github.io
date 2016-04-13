---
layout: post
author: jlrodriguezf
comments: true
title: WhatsPwn
categories: projects
published: true
excerpt: Linux Tool to extract sensitive data and inject payloads into any Android devices.
---

### Description
Linux tool used to extract sensitive data, inject backdoor or drop remote shells on android devices.

There may be some bugs on devices running Android 6.* Marshmallow because of new Android security policies. And *keypad* injection may not work depending on processing speed of device and version.

This program has been tested on Android 5.0.2 Lollipop on an LG H818n. It works flawlessly on many other devices but I do not guarantee this program will work for you flawlessly.

Do not hesitate in [contacting](http://jlrodriguezf.github.io/contact/) me if you have any question o suggestion.

[Here](http://jlrodriguezf.github.io/posts/WhatsPwn-2.0.html) is the complete **tutorial** for this tool.

###### This tool is currently in beta state, expect updates soon.

###### This tool is for educational and android developing purposes only. This was made to test and expose Android and WhatsApp security flaws.
	
---------
### Changelog
##### WhatsPwn 2.0
The first version was full of awfull bugs that in some systems it was just "unrunnable". So that's why I decided to rebuild the tool from scratch.

###### Added
- New payload features: Inject meterpreter into legitimate apk, create hidden or visible payloads.
- Constant connection status.

###### Improved
- UI
- Fixed  a lot of major and minor bugs
- Only ask for connection when it needs it
- Autodetect local or wireless extraction

###### Removed
- Command line arguments

### NEXT STEPS
The next steps would be:

* Some sort of background connection checking.
* Add more features like;
	* Contacts and SMS extraction.
	* Support for other apps not just WhatsApp and Telegram.
* Survive reboot on non-rooted devices.




