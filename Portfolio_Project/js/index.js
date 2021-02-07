const search_input = document.querySelector(".form-control");
const search_btn = document.querySelector("#btn-search");
const redo_btn = document.querySelector("#btn-redo");

let project_list = document.querySelectorAll(".project-subtitle");

/* console.log(project_list); */

search_btn.addEventListener('click', filterProjects);
redo_btn.addEventListener('click', resetProjects);



function filterProjects(e){
    e.preventDefault();

    let input_text = search_input.value.toLowerCase();
    
    project_list.forEach((project) => {
        
        if (project.textContent.toLowerCase().indexOf(input_text) == -1){
            let project_name = project.parentElement.querySelector(".project-title");

            if (project_name.textContent.toLowerCase().indexOf(input_text) == -1)
                project.parentElement.parentElement.style.display="none";
        }
    })

    search_input.value = "";
    search_btn.style.display="none";
    redo_btn.style.display="inline";
}

function resetProjects(e){
    e.preventDefault();
    
    project_list.forEach((project) => {
        
        if (project.parentElement.parentElement.style.display="none"){
            project.parentElement.parentElement.style.display="inline";
        }
    })

    redo_btn.style.display="none";
    search_btn.style.display="inline";
}