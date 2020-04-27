//use
//node i name_you_want

console.log("Creating parts " + process.argv[2]);
// console.log(process.argv[2]);

var fs = require("fs");
//main
fs.writeFile(
  "partials/" + process.argv[2] + ".php",
  "<?php // get_template_part( 'partials/" +
    process.argv[2] +
    "', '" +
    process.argv[2] +
    "' );\n?>\n<div class=\"" +
    process.argv[2] +
    '">\n\n</div>\n<?php\n?>',
  function (err) {
    if (err) throw err;
  }
);

//scss
fs.writeFile(
  "assets/css/_" + process.argv[2] + ".scss",
  "." + process.argv[2] + "{\n\n}",
  function (err) {
    if (err) throw err;
  }
);

console.log("Done!");
