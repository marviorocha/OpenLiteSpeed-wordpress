# Use the official OpenLiteSpeed image with dynamic OLS and PHP version

FROM ghcr.io/ndigitals/openlitespeed:latest

# Set environment variables


# Copy configuration files
# COPY lsws/conf /usr/local/lsws/conf/
# COPY lsws/admin-conf /usr/local/lsws/admin/conf/
# COPY bin/container /usr/local/bin/
COPY sites/localhost/html /var/www/vhosts/
# COPY acme /root/.acme.sh/
# COPY logs /usr/local/lsws/logs/

# Expose necessary ports
EXPOSE 80 443 443/udp 7080

# Set default command
CMD ["/usr/local/lsws/bin/lswsctrl", "start"]