// document.getElementById('filter_company_id').addEventListener('change',
//     function (){
//         let companyId= this.value || this.options[this.selectedIndex].value;
//         window.location.href = window.location.href.split('?')[0]+'?company_id='+companyId
//     });

// document.querySelectorAll('.btn-delete').forEach(button => {

//     button.addEventListener('click',function(event){
//         event.preventDefault();
//         if(confirm("Are you sure?")){
//             let action = this.getAttribute('href')
//             let form = document.getElementById("form-delete")
//             form.setAttribute('action',action)
//             form.submit()
//         }
//     });
    
// });


document.addEventListener('DOMContentLoaded', function() {
    const path = window.location.pathname;
    const collegesLink = document.getElementById('collegesLink');
    const studentsLink = document.getElementById('studentsLink');

    // Remove active class from both links first
    collegesLink.classList.remove('active');
    studentsLink.classList.remove('active');

    // Check if path matches /colleges or any sub-route
    if (path.startsWith('/colleges/') || path === '/colleges') {
        collegesLink.classList.add('active');
    }
    // Check if path matches /students or any sub-route
    else if (path.startsWith('/students/') || path === '/students') {
        studentsLink.classList.add('active');
    }
});
    