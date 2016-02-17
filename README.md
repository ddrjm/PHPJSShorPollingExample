PHP + JavaScript Short-polling example
--------------------------------------

Simple proof of concept example of a working short-polling page to provide near real-time updates.

`view.html` - polls the server every couple of seconds and always recieves a timestamp. If the timestamp recieved is bigger than the one that is stored in localStorage, we do our stuff and repeat the process all over again.

`poll.php` - small PHP file responsible for updating the timestamp in `last_save` and also handles the AJAX request.

----------
I've tried to make the code as simple as possible but improvements and tips are welcome.