# php_background_process
Php class for running a Php code as a Linux/Windows server background Process.

This Background Process uses the php exec function to execute a task as a background process.

It can be used to perform tasks that are long and requires a lot of page wait time, you can simply execute them as a background process that will not have any load times on the front end.

Usage:
1) bgProcess.php contains the class for background process, simply call  BackgroundProcess::fork('filename.php'); where you need to specify the file name. Then you can move ahead without waiting for the task to be compelted.

2) main.php contains the code for the task to be completed. In this example,it writes a file on the server with some arguments that are passed dynamically while calling the open() funtion.
