// [ECMAScript 5 Syntax]
 
var isNetworkOK = true;
 
// This function return a Promise
async function downloadFile(url)  {
    console.log("Start downloading file ..."); // ***
 
    // A Promise
    var willIGetAFile = new Promise (
        function (resolve, reject) {
 
            if (isNetworkOK) {
               setTimeout( function() {
                   console.log("Complete the download process!"); // ***
                   var file = {
                       fileName: 'file.mp3',
                       fileContent: '...',
                       fileSize: '3 MB'
                   };
                   resolve(file); // fulfilled
               }, 5 * 1000); // 5 Seconds
            } else {
                console.log("File download process failed!"); // ***
                var error = new Error('There is a problem with the network.');
                reject(error); // reject
            }
 
        }
    );
 
    return willIGetAFile; // Return a Promise.
}
async function openFile(file) {
    console.log("Start opening file ..."); // ***
 
    var willFileOpen = new Promise(
        function (resolve, reject) {
             var message = "File " + file.fileName + " opened!"
             resolve(message);
        }
    );
 
    return willFileOpen; // Return a Promise.
}

async function mainFunction(){
	try{
		console.log("Start app.."); // ***
 
        // Call downloadFile(..) function with 'await' keyword:
        // It returns a File (Not Promise)
        var file = await downloadFile("http://example.com/file.mp3");
 
        console.log(file);
 
        // Call openFile(..) function with 'await' keyword:
        // It returns a String (Not Promise)
        var message = await openFile(file);
 
        console.log(message);
 
        console.log("End app.."); // ***
	}
	catch(e){
		console.log(e.message);
	}
}
(async() => {
	await mainFunction();
})();

// Call downloadFile(..) function:
// Returns a Promise object:
// var willIGetAFile = downloadFile("http://example.com/file.mp3"); //gọi hàm downloadFile ở trên
 
// willIGetAFile
// 	.then(openFile) // Chain it!
//   .then(function (fulfilled) {
//       // Get a File
//       // Output: {fileName: 'file.mp3', fileContent: '...', fileSize: '3 MB'}
//       console.log("fulfilled: ",fulfilled);
//   })
//   .catch(function (error) {
//        // Network Error!
//        // Output: There is a problem with the network.
//        console.log("error: ",error.message);
//   });

var url = "https://rawgit.com/o7planning/webexamples/master/_testdatas_/simple-text-data.txt";
function doGetTEXT() {
	var aPromise = fetch(url);

	aPromise
		.then(function() {
			console.log("OK! Server returns a response object:", response);

			if(!response.ok) {
				throw new Error("HTTP error, status = " + response.status);
			}
			response.text()
				.then(function (myText) {
					console.log("Text: ", myText);
				})
				.catch(function(error) {
	             // Never happened.
	          });
		})
		.catch(function(error) {
			console.log("Noooooo! Something error:", error);
		})
}