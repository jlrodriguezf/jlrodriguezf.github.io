---
layout: post
author: jlrodriguezf
comments: true
title: How I got expelled from highschool
categories: posts
published: true
excerpt: A brief story on how i got expelled from highschool for hacking computers.
---

I've always been so interested in computer science and specifically in cybersecurity. When i was younger, i started digging the internet on how to breach Windows security policies and how to perform attacks. All seemed quite easy and i didn't want to stay in the theory, i wanted to test it for myself. So first of all, i set up a Linux virtual machine, and started experimenting on my own network and computer.

I was having so much fun but i was thinking; yes, everything is pretty cool, but what's the point if everything needs to be in the same network and with a controlled environment? Then i started digging the internet again and found that it was possible to take this intranet attacks to the internet and that it could be done pretty easily, altough, it was a risk for my network because some ports would be opened to everyone. I said "meh, lets try it!". I forwarded some ports in my router, set up a no-ip account (dynamic DNS) and started experimenting on my firends PC and with his consent obviously but then i wanted to do more, and more and more. So i knew that my school's cybersecurity was pretty poor, i don't want to blame the system's manager but it was pretty poor i don't know why and i wanted to show that it was possible.

Anyway, continuing with the story; i started studying and acquiring information about the computer like BIOS characteristics, Windows' active security policies, network connection diagrams, etc. So the plan was;

1. Disable BIOS secure boot
2. Enable legacy mode
3. Boot Linux in a Live USB
4. Run a terminal at boot
5. Make me admin
6. Change security policies
7. Enjoy!

Everything went as planned but it was just a single computer i wanted to do it on all of them (24 aprox.) but i was so lazy to do it manually so i created an USB Rubber Ducky script to do it for me. I just plugged the USB, waited a few seconds and it was done it had fulle access to the computers from everywhere. Could do any kind of stuff from sending messages to sniffing the network, change notes, intercept and inject packages to the network, get passwords and sensitive info, etc.

All this could be prevented just by a simple thing as setting up a BIOS password.

I'm not proud of any of these, i fully regret doing this, i apologize to everyone who i may have harmed in any way. This is just to make a point on the importance of cybersecurity in institutions and companies, and specially in home. Many of us don't pay attention to the potential risk of the internet and technology. We must be fully aware of the risks.
