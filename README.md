Fastest Apk-Binder for termux and Kali Linux
Using this EMSF TOOK Apk-Binder script you can embed the metasploit payload or backdoor with apk files.
Supported by: Termux and Kali Linux

**Features:**<br>
<ul><li>Static Payload using Portmap.io (TCP port 5576),</li>
<li>Quick exploit (android+bind, windows, Linux py, ruby, sh)</li>
<li>Install Ngrok</li>
<li>OVPN (For desktop-based linux</li>
<li><a href="https://play.google.com/store/apps/details?id=de.blinkt.openvpn&hl=en_IN&gl=US">Open VPN Client android</a> </li>
<li>Support Ngrok Http Payload Share</li>
<li>Uses MSFvenom To Generate and Bind APK</li></ul><br>

**Requirements:-**<br>
<a href="https://youtu.be/IU26QC3NDvo">Metasploit-Framework</a> > Apktools > Zipalign > Keytool > <a href="https://uk2blogger.blogspot.com/2022/03/how-to-bind-apk-payload-in-termux-with.html">Java</a>

Install and exploit<br><br>

Version 2.3

EMSF tool is one of the fastest tools to generate msfvenom payload. Here you will get extra options to use NGROK and Local servers to share your files with your friends, Quick Netcat connections, and local PHP, Python, and Ruby servers.

# Installation:- Ubuntu/Kali-Linux/Parrot-OS

#Step 1 UPDATE UPGRADE
```
sudo apt update; sudo apt upgrade
```

#Step 2 Download and start
```
curl -L -o $PWD/emsf https://github.com/efxtv/EMSF/blob/main/Linux/emsf?raw=true -s;sudo chmod +x emsf;sudo cp emsf /usr/bin/  
```


# # Installation:- in Termux

#Step 1 UPDATE UPGRADE
```
pkg update; pkg upgrade
```
```
pkg install wget curl
termux-setup-storage
```

#Step 2 Download and start
```
curl -L -o $PREFIX/bin/emsf https://raw.githubusercontent.com/efxtv/EMSF/main/termux/emsf -s;chmod +x $PREFIX/bin/emsf
```

# Server most used. NCAT server index.html require
<pre><code>while true; do printf 'HTTP/1.1 200 OK\n\n%s' "$(cat index.html)" | netcat -l 8888; done</code></pre>

# Sign apk using <a href="https://t.me/efxtv/269">APK Tool</a><br>
**Method 1 Steps to sign with APK Editor**<br>
**Step 1** Install apk editor and Click on the Apk File option<br>
**Step 2** Select your apk from Internal/external SDCARD<br>
**Step 3** Click On Full Edit<br>
**Step 4** Select decode all files (It will take some time)<br>
**Step 5** Click on Manifest (bottom right)<br>
**Step 6** Click on Tools Icon (top right)<br>
 Application signed using Apk Editor (may get error some time)<br>
 
 # Sign apk using <a href="https://t.me/efxtv/270">MiXplorer</a><br>
**Method 1 Steps to sign with MIX Application.**<br>
**Step 1** install the app <br>
**Step 2** Long press on apk, click on 3 dots (top right)<br>
**Step 3** Scroll down and click on sign<br>
**Step 4** Click on the clipboard Icon next to 3 dots, and click on Sign one file <br>
**Step 5** Click on Auto. Repeat the same process 3 times.<br>

It will generate 3 signed APKs. Keep the latest one. Cheers<br>

**How to add auto permissions to apk?**<br>
**Step 1** Open APK Editor<br>
**Step 2** Select apk file<br>
**Step 3** Click on Common EDIT<br>
**Step 4** Select Minimum SDK 15 Maximum SDK 22<br>
**Step 5** Click on Save<br>
**Step 6** Open file manager and look for APK Editor/temp folder <br>

Support for the project
---------------------------------------
---------------------------------------
<a href="#"><img src="https://raw.githubusercontent.com/efxtv/efxtv/master/assets/3eeb7756-68ca-41b6-86aa-00a4c575bed9.png.webp" title="Phonepay" alt="Phonepay" width="241" height="269"></a>
<a href="https://paypal.me/efxtv"><img src="https://raw.githubusercontent.com/efxtv/efxtv/master/assets/PAYPAL.webp" title="Paypal" alt="Paypal" width="241" height="269"></a>
<a href="https://www.buymeacoffee.com/efxtv"><img src="https://raw.githubusercontent.com/efxtv/efxtv/master/assets/COFE.webp" title="Paypal" alt="Paypal" width="241" height="269"></a>
---------------------------------------
---------------------------------------
