
PASSWORD='123456'
PROJECTFOLDER='app'

sudo apt-get update
sudo apt-get -y upgrade

# Install Apache2
sudo apt-get install -y apache2

# Install PHP
sudo apt-get install php5

# Install MySQL
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password $PASSWORD"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $PASSWORD"
sudo apt-get -y install mysql-server
sudo apt-get install php5-mysql

# Create project folder
sudo mkdir /var/www/html/${PROJECTFOLDER}

# Setup host file
VHOST=$(cat <<EOF
<VirtualHost *:80>
	DocumentRoot "/var/www/html/$PROJECTFOLDER"
	<Directory "/var/www/html/$PROJECTFOLDER"
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost>
EOF
)

echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite
sudo a2enmod rewrite

# Restart Apache
service apache2 restart

# Remove default index.html file from project directory
sudo rm "/var/www/html/index.html"

# Install git
sudo apt-get -y install git

# Install composer
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# Install composer packages
cd "var/www/html/${PROJECTFOLDER}"
composer install


# Create DB and install sample data
# This is just a sample install command for a reminder will need to add more commands and sql files later
# sudo mysql -h "localhost" -u "root" "-p${PASSWORD}" < "/var/www/html/${PROJECTFOLDER}/install/create-database.sql"

# Finished
echo "Installation Complete"












