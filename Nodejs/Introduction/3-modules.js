//Modules
//CommonJS, every file is module by default
//Modules - Encapsulated Code (Only Share Minimum)


//few built in modules OS,PATH,FS(File System),HTTP

const names = require('./3.1-names.js')
const sayHello = require('./3.2-utils')
const data = require('./3.3-alt-names')
console.log(names,sayHello)
console.log(data)
require('./3.4-invoking-module') //Method is being invoked from the module itself

sayHello(names.john);
sayHello('Ram');
sayHello(data.singlePerson.name);