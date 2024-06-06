// document.querySelector('#imageInput').addEventListener('change', function(e){
//     var fileReader = new FileReader();
//     fileReader.onload = function(e){
//         var imgElement = document.querySelector('.displayImage');
//         imgElement.src = e.target.result;
//     };
//     fileReader.readAsDataURL(e.target.files[0]);
// });
document.querySelectorAll('.imageInput').forEach((inputFileElement, key)=>{
    key = key - 1;
    inputFileElement.addEventListener('change', function(e){
        var fileReader = new FileReader();
        fileReader.onload = function(e){
            var imgElement = document.querySelector(`.displayImage-${key}`);
            imgElement.src = e.target.result;
        };

        fileReader.readAsDataURL(e.target.files[0]);
    });
})
