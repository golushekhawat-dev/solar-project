// faq question javascript

document.addEventListener('DOMContentLoaded', () => {
    const togglers = document.querySelectorAll('[data-toggle]');
  
    togglers.forEach((btn) => {
      btn.addEventListener('click', (e) => {
         const selector = e.currentTarget.dataset.toggle
         const block = document.querySelector(`${selector}`);
        if (e.currentTarget.classList.contains('active')) {
          block.style.maxHeight = '';
        } else {
          block.style.maxHeight = block.scrollHeight + 'px';
        }
          
         e.currentTarget.classList.toggle('active')
      })
    })
	 })


    //  progress bar javascript

    var currentStep = 1;
         const totalSteps = 4;
         
         function updateProgressBar() {
             let progress = ((currentStep - 1) / (totalSteps - 1)) * 100;
             document.querySelector(".progress-bar").style.width = progress + "%";
         }
         
         function displayStep(stepNumber) {
             if (stepNumber >= 1 && stepNumber <= totalSteps) {
                 document.querySelectorAll(".step").forEach(step => step.style.display = "none");
                 document.querySelector(".step-" + stepNumber).style.display = "block";
                 currentStep = stepNumber;
                 updateProgressBar();
             }
         }
         
         document.addEventListener("DOMContentLoaded", function () {
             document.querySelectorAll(".next-step").forEach(button => button.addEventListener("click", function () {
                 if (currentStep < totalSteps) displayStep(currentStep + 1);
             }));
         
             document.querySelectorAll(".prev-step").forEach(button => button.addEventListener("click", function () {
                 if (currentStep > 1) displayStep(currentStep - 1 );
             }));
         
             displayStep(1);
         });

        //  $(".images img").click(function(){
        //     $("#full-image").attr("src", $(this).attr("src"));
        //     $('#image-viewer').show();
        //   });
          
        //   $("#image-viewer .close").click(function(){
        //     $('#image-viewer').hide();
        //   });
        var modal = document.getElementById("image-viewer");
    
    // Get the modal image element
    var modalImg = document.getElementById("full-image");
    
    // Add click event to all images with the class 'clickable-image'
    var images = document.getElementsByClassName("clickable-image");
    for(var i = 0; i < images.length; i++){
        images[i].onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
        }
    }
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
    
    // Optional: Close modal when clicking anywhere outside the image
    modal.onclick = function(event) {
        if(event.target == modal) {
            modal.style.display = "none";
        }
    }

    