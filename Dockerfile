# Use the official OpenLiteSpeed image with dynamic OLS and PHP version

FROM ghcr.io/ndigitals/openlitespeed:latest

# Set environment variables
# ENV TZ=${TimeZone}

# Copy configuration files

COPY ./sites /var/www/vhosts/

# Expose necessary ports
EXPOSE 80 443 443/udp 7080

# Set default command
CMD ["/usr/local/lsws/bin/lswsctrl", "start"]