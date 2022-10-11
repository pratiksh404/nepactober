const { readFile } = require('fs')

console.log("Started fiest Task");

// Check File Path
readFile('./content/first.txt','utf8',(err,result) => {
    if(err)
    {
        console.log(err)
        return
    }
    console.log(result)
    console.log('Completed First task')
})

console.log("starting next task")

