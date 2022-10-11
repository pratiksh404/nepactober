const os = require('os')

// info about current user
const user = os.userInfo();
console.log(user);

// method returns the system uptime in seconds
console.log(`The System Uptime is ${os.uptime()} seconds`);
// console.log(os);


//type returns os type
//release returns os release 
//totalmem returns total memory in the os
//freemem returns free memory in the os
const currentOS = {
    name:os.type(),
    release:os.release(),
    totalMem:os.totalmem(),
    freeMem:os.freemem(),
}
console.log(currentOS);