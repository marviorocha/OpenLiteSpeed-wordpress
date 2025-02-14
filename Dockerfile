# Use the official OpenLiteSpeed image with dynamic OLS and PHP version

FROM ghcr.io/ndigitals/openlitespeed:latest

# Set environment variables


# Copy configuration files
# COPY lsws/conf /usr/local/lsws/conf/
# COPY lsws/admin-conf /usr/local/lsws/admin/conf/
# COPY bin/container /usr/local/bin/
# COPY acme /root/.acme.sh/
# COPY logs /usr/local/lsws/logs/


COPY sites/localhost/html /var/www/vhosts/localhost/html
COPY sites/localhost/html/wp-config-prod.php /var/www/vhosts/localhost/html/wp-config.php
COPY bin/fix-permissions.sh /var/www/vhosts/localhost
# Set permission for wordpress
RUN chmod +x /var/www/vhosts/localhost/fix-permissions.sh 
RUN /var/www/vhosts/localhost/fix-permissions.sh

# Expose necessary ports
EXPOSE 80 443 443/udp 7080

# Set default command
CMD ["/usr/local/lsws/bin/lswsctrl", "start"]