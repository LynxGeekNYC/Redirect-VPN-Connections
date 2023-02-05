# Redirect-VPN-Connections
Simple PHP script that redirects VPN to Either a different Page or Display Text / HTML

This script makes a request to the ipinfo.io API to retrieve information about the user's IP address. The $data variable will contain information about the user's IP, including the organization that owns it. If the organization name contains the string "VPN", the script assumes the user is accessing the site through a VPN and redirects them to a different website.

VPN Redirect
============
If it's a VPN Visitor, it will redirect to a different page.

VPN HTML Version
================
If it's a VPN Visitor, it will display HTML

NOTE
====
This is a simple script that calls on IPINFO.IO API. This script may result in delays in loading
