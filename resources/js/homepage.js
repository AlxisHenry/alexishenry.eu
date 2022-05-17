import ScrollReveal from "scrollreveal";
import anime from "animejs";
import * as ProjectsCards from "./components/project-cards"

const writeJob = (job, index) => {
    const Job = document.querySelector('.job p')
    if(index < job.length) {
        setTimeout(() => {
            Job.innerHTML += `<span>${job[index]}</span>`
            writeJob(job, index + 1)
        }, 125)
    } else {
        Job.classList.add('disabled-animation-writer')
    }
}

const writeName = (name, index) => {
    const Name = document.querySelector('.name p')
    if(index < name.length) {
        setTimeout(() => {
            Name.innerHTML += `<span>${name[index]}</span>`
            writeName(name, index + 1)
        }, 125)
    } else {
        Name.classList.add('disabled-animation-writer')
    }
}

const HomepageReveal = () => {
    const LanguagesIcons = document.querySelectorAll('.language_icon')
    let Icon = 0
    for(let i = 0; i < (240 * (LanguagesIcons.length + 1)); i++) {
        ScrollReveal().reveal(LanguagesIcons[Icon], {delay: i})
        i = i+240
        Icon++
    }
}

const RevealYears = () => {
    const years = document.querySelector('.years');
    anime({
        targets: years,
        innerHTML: [2000, 2022],
        easing: 'linear',
        round: 1
    });
}

window.addEventListener('load', (e) => {

    writeName('Henry alexis', 0)
    writeJob('Web Developer', 0)
    HomepageReveal()
    RevealYears()
    ProjectsCards.InputAnimation(e)
    ProjectsCards.ProjectAnimation(e)

})