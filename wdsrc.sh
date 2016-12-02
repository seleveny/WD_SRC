百度云服务器认证；weidiansrc和weidian#$%^src
root/UJNhyt)(98
mysql root/op-=789

wget https://github.com/OpenSISE/HRSRC/archive/master.zip
unzip ./master.zip
sudo apt-get install apache2
sudo apt-get install apache2 --fix-missing
sudo apt-get install php5 libapache2-mod-php5
/etc/init.d/apache2 restart
sudo reboot
sudo cp -r ./HRSRC-master/* /var/www/
sudo gedit /etc/apache2/sites-enabled/000-default.conf
sudo /etc/init.d/apache2 restart
sudo apt-get install mysql-server mysql-client
sudo apt-get install mysql-server mysql-client --fix-missing
sudo gedit /var/www/Application/Common/Conf/db.php
sudo vi /var/www/Application/Common/Conf/db.php
sudo /etc/init.d/apache2 restart
apt-cache search php5
sudo apt-get install php5-mysql php5-curl php5-gd php5-intl php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-ps php5-pspell php5-recode php5-snmp php5-sqlite php5-tidy php5-xmlrpc php5-xsl
sudo apt-get install phpmyadmin
sudo /etc/init.d/apache2 restart
sudo reboot
sudo gedit /etc/apache2/sites-enabled/000-default.conf
sudo mv /var/www/* /var/www/html/
sudo gedit /etc/apache2/sites-enabled/000-default.conf
sudo /etc/init.d/apache2 restart
sudo chmod -R +w Runtime/
sudo chmod -R +w /var/www/html/Application/Runtime/
sudo chmod -R +w /var/www/html/ThinkPHP/
sudo chmod -R +w /var/www/html/Application/
sudo chmod 755 /var/www/html/*
sudo chmod 777 -R /var/www
vi /var/www/info.php
apt-get install php5 libapache2-mod-php5
sudo gedit /etc/apache2/sites-available/000-default.conf
sudo /etc/init.d/apache2 restart
vi /etc/apt/source.list
sudo /etc/init.d/apache2 restart
cd /var/www/html/
sudo ln -s /usr/share/phpmyadmin phpmyadmin
sudo mysql -h localhost -uroot -phrcms < /var/www/html/Datebase/hrcms.sql
mysql -uroot -p
sudo vi /var/www/html/Application/Common/Conf/config.php
easy_install pycurl
pip install pycurl




