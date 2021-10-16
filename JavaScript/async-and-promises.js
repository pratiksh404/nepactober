// Example of Promises and Async in Javascript

// Lets create an generic promise
const promise1 = Promise.resolve('Lorem Ipsum');
const promise1Failure = Promise.reject('error');

const promise2 = Promise.resolve('async Lorem Ipsum');

// When whe consum that promise without async/await features, we can use '.then' with callback to get it resources
// on failure, you can callback your failure as an '.catch'

promise1.then((data) => {
  // It will console 'Lorem Ipsum', the value we resolved
  console.log(data);
}).catch((error) => {
  // It will console the error rejected
  console.log(error);
});

promise1Failure.then((data) => {
  console.log(data);
}).catch((error) => {
  console.log(error);
});

// With an async function, we can use 'await' syntax, we dont need to use then or catch
async function asyncExample(promise) {
  // To catch it errors, you can put it inside an try catch
  try {
    const result = await promise;
    console.log(result);
  } catch (error) {
    console.log(error);
  }
}

asyncExample(promise2);
asyncExample(promise1Failure);
