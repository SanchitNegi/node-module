// Define the Person constructor
var Person = function(firstName) {
  this.firstName = firstName;
};

// Add a couple of methods to Person.prototype
Person.prototype.walk = function(){
  console.log("I am walking!");
};

Person.prototype.sayHello = function(){
  console.log("Hello, I'm " + this.firstName);
};

// Define the Student constructor
function Student(firstName, subject) {
 
  Person.call(this, firstName);

  // Initialize our Student-specific properties
  this.subject = subject;
};


Student.prototype = Object.create(Person.prototype); // See note below

// Set the "constructor" property to refer to Student
Student.prototype.constructor = Student;

// Replace the "sayHello" method


// Add a "sayGoodBye" method
Student.prototype.sayGoodBye = function(){
  console.log("Goodbye!");
};

exports.Student = Student;
exports.Person = Person;
