var url = 'http://mylogger.io/log';

function log(message) {
  // Send an HTTP request
  console.log(message);
}

module.exports.log = log; // export the function log
// module.exports.endPoint = url; // export the variable url as endPoint