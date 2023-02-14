# 5199ScoutingSystem
A browser based data entry form and local database for FRC Scouting

# How the entire system works:
An HTML-based form collection and portable local database system is a tool designed for collecting data during robotics competitions. The system operates by using HTML local-hosted forms to gather information from participants and competitors during the competition. The forms can be easily accessed through a web browser, making the data collection process simple and efficient compared to the tedious task of standardizing which device is used for data collection.

The entire system including the database storage, server-hosting program, and html form site is all held on a flash drive and requires no installation. The collected data is stored in a local csv file on the drive, making it portable and easily transported to different competition locations, can be accessed and run offline, and has a plug-n-play nature for use on any windows system.

The form can be used to collect a variety of information, including team, robot, and performance data. It is whatever the designer needs it for. This information can be used to evaluate the performance of individual teams and robots and to make informed decisions about our pick list. The system can also be ported into Tableau which is a program used for graphical data and chart display for easy and quick data evaluation

# Program dependencies:
The entire system has no dependencies other than a network connected computer to run on. When loading the system for the first time you must make sure that the file php.zip is extracted in the same root location

# HTML Form:
The html form is in a .php file for server hosting, but contains regular html formatting with some JS and PHP code. The site is based on the 2023 Season FRC Game and has multiple questions, buttons, toggles, and selection GUI's for the purpose of maximum data collection for the purpose of scouting data.

# Server-Hosting
Server hosting is taken care of by using a php server which hosts the index.php server with the html form on it. It will use the pre-installed php files to host it by giving your system a connection to use those files with the php command in cmd, and it will open the server terminal and webpage on port "5199" on your computer's local IP address. 

!! This form is only accessible from your local network !! (Unless manually port-forwarded)

# Data Output
The data collected on the form all outputs to a regular csv file which, if not existing already, will be created with the name scouting.csv. After it has been created all additional data submitted to the form will be appended to the .csv file. While no other data program is provided, you can import this csv file into multiple different programs for data analysis including Excel, Google Sheets, Tableau, etc. 
