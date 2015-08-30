# SETUP:
# =====
# set_web_port and set_std_port live in /etc/ssh/
# in addition to sshd_config, you need to make a copy of it called sshd_config_custom
# edit sshd_config_custom to include the additional ports you want (e.g. 80)
#
# index.php, set_web_port.php, .htaccess, and .htpasswd live in a web directory.
# It's your job to make sure the password protection / .htaccess stuff works.
#
# Add the following line (without initial hash) in the sudoers file (/etc/sudoers), below "User privilege specification":
# www-data        ALL=(root)      NOPASSWD: /etc/ssh/set_web_port
#
# USAGE:
# =====
# Simply poitn your browser to the directory with index.php in it.
# You will be prompted for username and password.
# You can then click the link: apache will go down, and sshd will restart.
#
# set_std_port is for manual use: simply ># ./set_std_port when you're done
# 
# Feel free to make a makefile / installer for setup and contribute.