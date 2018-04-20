Introduction
Somi implemented by game maker studio version 1.4. GameMaker accommodates the creation of cross-platform using drag and drop action sequences or a sandboxed scripting language known as Game Maker Language, which can be used to develop more advanced games that could not be created just by using the drag and drop features. The project has been prepared to export for Windows and html5 platforms, and needs more configuration to export for Android or iOS, which the article did not address.

How to export for html5 platform 
To export for html5 platform, please open project in GameMaker studio 1.4. You need to first set target to html5, and then click on the create application from the File menu. Select file location and click save. 
The output contains a “html5game” folder and a file named “index.html”. The game Will play in browser after opening “index.html” in any broswer (FireFox and chrom recommended).

Setup for web-based version
In order to export web-based version, you need to open “setupGame_ctrl” from the setupGame folder located in the root. Then open the code for “create” event. Set the global.winOrWeb variable to 2.
The next step is to set up the game parameters.You need to set two parameters: “game_duration” and “delay”. These parameters are located next to the “global.winOrWeb” parameter in the “setupGame_ctrl” object, which was initialized in previous step.
The “game_duration” parameter specifies the total duration time of the game in seconds, and the “delay” parameter specifies the artificial input delay that would be introduced in the executed version of game, which is in milliseconds. The default value for “game_duration” is 90 seconds and for “delay” is 0.

 Crowdsourcing platform
 In order to communicate with server and recording logs in html5 platform, a php scipt is provided along with the game which can be found in the folder named, Additional_features. 
 The game is implemented in a way that at the end of the game, the stored data will be sent to the server in the Jason format. Also, in order to identify user logs and merge it with information of the questionnaire that the user needs to fill in another system, the game generates a random code and sends it with the user's logs to the server, also the code is displayed to the user and He will be asked to enter the code in the questionnaire.
 The server address that the Jason file is sent to defined in "global.url_sendDataAndShowCode" variable. This variable located in the create code of the “setupGame_ctrl” object, which was initialized in the previous step.
 On the server side, the Jason string needs to be decoded and the parameters stored on the server. A sample PHP code is provided to store the parameters in the database. This sample file also displays the user code in addition and asking the user to enter the code in the questionnaire.

parametr	type	description
Id	string	User identification code
cloudKey	string	
serverDateTime	Date	Server date and time
Score	Int	Score
version	String	Version of the game
numOfJump	Int	Number of jumps
numOfShootUzi	Int	Number of bullet that player shoots with uzi
numOfHitUzi	Int	Number of bullets that hit to the enemeis with uzi
numOfShootShotgun	Int	Number of bullet that player shoots with shotgun
numOFHitShotGun	Int	Number of bullets that hit to the enemeis with shotgun
gameDate	String	Client date
gameTime	String	Client time

How to export for windows platform 
To get the exports for Windows platform, you need to open project in GameMaker studio 1.4. First set target to windows, and then click on the "create application from" in the File menu. Select file location and type file (installer or portable) and click save. Output file will be in the executable format and will be runnable in Windows.

How to setup project  for windows platform 
To setup the project to export for html platform, please open “setupGame_ctrl” object from the setupGame folder in resource tree. Then open the code for “create” event. Set the global.winOrWeb variable to 1.
The parameters of the game (delay, size of the obstacles and size of the enemies) windows version set in executable file (unlike the web version that was in the code). They wilL set after the game is executed on a settings page, and after confirmation tutorial and game will play.


How to record logs in windows platform
In the Windows version, the game logs are stored in the file on the local computer. The path to which the file is stored is the directory the system considers for the game (by default “AppData\Local\TheGame”). The game's general log is stored in the “log.ini” file and a file called “log_detail_id.txt” is created for each game which includes the details of the game. A sample recorded data of “log.ini” is shown below: 

[id]
score="70"
numOfhitShotGun="0"
numOfShootShotGun="0"
numOfhitUzi="38"
numOfShootUzi="90"
numOfFallingDown="0"
numOfJump="3"
time="18_17"
date="15_3_2018

In addition, another file structure “log_detail_id.txt”  is provided that the game events are recorded based on the time of the occurrence. The information would be gathered is as follows:
Name of the event
Jump
fallingDown
shootUzi: 
hitUzi
shootShotGun
hitShotGun
