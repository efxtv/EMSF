

# EMSF tool
# EMSF tool by Efx Tv
# Install Ngrok, create patload and more using EMSF tool by EFX Tv
Fastest metasploit payload generator

Version 2.1

#EMSF tool is one of the most fastest tools to generate msfpayloads. Here you will get extra options to use NGROK and Localservers to share your files with your friends.

# Steps to install emsf in Ubuntu/Kali-linux/Parrot-OS

#Step 1 UPDATE UPGRADE
<pre> sudo apt update; sudo apt upgrade</pre>

#Step 2 Download and start
<pre> curl -L -o $PWD/emsf https://github.com/efxtv/EMSF/blob/main/Linux/emsf?raw=true -s;sudo chmod +x emsf;sudo cp emsf /usr/bin/ </pre>


# Steps to install emsf in Termux

#Step 1 UPDATE UPGRADE
<pre> apt update; apt upgrade</pre>

#Step 2 Download and start
<pre> curl -L -o $PWD/emsf https://github.com/efxtv/EMSF/blob/main/termux/emsf?raw=true -s;chmod +x emsf;mv emsf ../usr/bin/ </pre>

# Server most used. NCAT server index.html require
<pre> while true; do printf 'HTTP/1.1 200 OK\n\n%s' "$(cat index.html)" | netcat -l 8888; done</pre> Support for the project

Support for the project
---------------------------------------
<a href="#"><img src="https://raw.githubusercontent.com/efxtv/efxtv/master/assets/3eeb7756-68ca-41b6-86aa-00a4c575bed9.png.webp" alt="Phonepay" width="241" height="269"></a>
<a href="https://paypal.me/efxtv"><img src="https://raw.githubusercontent.com/efxtv/efxtv/master/assets/donate-efx-tv.png" alt="Paypal" width="125" height="40"></a>
---------------------------------------
