const path = require('path')

//Get Path Separator for System
console.log(path.sep)

//Merge to create a valid path
const filePath = path.join('/content','subfolder','text.txt')
console.log(filePath);

//get basename of the path
const base = path.basename(filePath);
console.log(base);

//Returns the absolute path of the provided uri
const absolute = path.resolve(__dirname,'content','subfolder','text.txt');
console.log(absolute);

