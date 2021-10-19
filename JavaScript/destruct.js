// Example of Destructing

// Lets create an generic object
const person = {
  name: 'foobar',
  age: 20,
  friend: { name: 'lorem ipsum', age: 21 },
  childrens: [{ name: 'children 1' }, { name: 'children 2' }],
};

// Get only the name
const { name } = person;

console.log(name);

// Get age and renaming to an other name
const { age: personAge } = person;

console.log(personAge);

// Get property of a nested object from an object
const { friend: { name: friendName } } = person;

console.log(friendName);

// Merge property of a nested object from an object
const { friend: { ...friendProperties } } = person;

console.log(friendProperties);

// Destruct from a array nested on a object
const { childrens: [ children1, children2 ] } = person;

console.log(children1, children2);
