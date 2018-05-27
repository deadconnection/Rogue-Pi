# A rogue captive portal for Raspberry Pi

This is a simple website and set of configuration files that turns a Raspberry Pi 3 / Zero W into a rogue access point named "_The Cloud". It spoofs a captive portal that looks like the _The Cloud, Google and Facebook login page, however authentication always fails and the credentials are logged to a text file.

It was designed to demonstrate the simplicity of offline credential grabbing and to educate about wireless security. Using this for malicious purposes is against the author's intent and could lead to prosecution under privacy laws.

Installation after a fresh install of Rasbian Jessie Lite:
```
sudo apt-get install git
git clone https://github.com/expiredsource/Rogue-Pi
cd Rogue-Pi
chmod +x install.sh
sudo ./install.sh
sudo reboot
```
During installation, macchanger will ask whether or not MAC addresses should be changed automatically - choose "No". The startup script in rc.local will perform this task more reliably.

After reboot, look for an access point named "_The Cloud." Connecting to it from an Apple, Android or Windows device should automatically bring up a captive portal login screen.

Credentials are logged in `/var/www/html/creds.json`.
