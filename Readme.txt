--IAL Website Project--
Team Sponsor: Dr. Larry Abele
Team Supervisor: Dr. Fara Rohani
Team Lead: Colin Dwyer
Team Members: Brian K. Vagnini, Sweta Shrestha, Karen Hawkins, Michael Davidson

-Design technologies-
Website is done in Markdown and rendered by Jekyll with CSS rendered by Less Preprocessor, with the addition
of Bootstrap.
Events registration form is currntly done in HTML5 with PHP scripting and .csv file (may be changing to a MySQL db in the future).
The choice of hosting for the events page allows for the process to be done using Python, Ruby, PHP or NodeJS.

-Technical Considerations-
Website is to be hosted at Github Pages. It's IP is 192.30.252.153
Events registration form is to be hosted at DigitalOcean. It's IP is TBD.
Purpose of the events registration page is to display a login, then upon successful login, display the registration form, then 
process the results (currently, by writing them to a .csv file), then display a confirmation page.

The website will be split from the registration form, for both business reasons (Dr. Abele and staff will approve or reject prospective 
attendees, then send the approved attendees the website URL and UN/PW to actually register), and for technical reasons (Github Pages
does not allow for any server side scripting, only HTML5, CSS and JavaScript).

Hosting for events registration page will be done at DigitalOcean.com. The hosting plan will be the $10/month plan (2 TB transfer, 1 GB RAM, 
1 CPU core and 30 GB SSD HD, plus a dedicated IP address. Best choice is to select a LAMP stack droplet.). Can add the exim mail server (send only)
if needed.

-Tasks-
Need to get FSU DNS team to create an A record for ial.fsu.edu and point it to 192.30.252.153.
Need to get DigitalOcean hosting set up (see above).
Need to get FSU DNS team to create an A record for events.ial.fsu.edu and point it to DigitalOcean IP.
Need to create a meta tag for redirect on ispa.fsu.edu/ial/index.html to redirect to ial.fsu.edu.
Need to figure out how to get MySQL to export to Excel/.csv file OR update the fields in events.csv.

-Project files-
Project files for the website itself is on Catkin under /home/git/IAL.git.
Project files for the events registration page(s) is on Catkin under /home/git/IALevents.git.

-Workflow-
Website:
Sweta, Brian and Colin maintain their own local master branch (Sweta and Brian will most likely also have a local develop branch as well, merging 
the completed sections of the local develop branch into the local master branch). They will push their local master branch code to the Projects master 
branch on Catkin (IAL.git). Since the website is hosted at Github Pages, Colin will push the Catkin master branch code to GithubPages.

Events Registration form:
Sweta, Brian and Colin maintain their own local master branch (Sweta and Brian will most likely also have a local develop branch as well, merging 
the completed sections of the local develop branch into the local master branch). They will push their local master branch code to the Projects master 
branch on Catkin (IALevents.git). Since the event registrataion form is hosted at DigitalOcean, Colin or Brian will SFTP the files to DigitalOcean host.
