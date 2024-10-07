FROM drupal:10-apache

# Install necessary dependencies for Drush and Composer
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    vim \
		nodejs \
		npm \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set the working directory
WORKDIR /opt/drupal

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
