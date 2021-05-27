
import  {randomInt} from './random.js'



export default class Horloge{
    constructor(){
        this.ajoutBackgroundimage()
        this.couleurAiguille()
         // Doit changer toutes les secondes:
         this.updateDate()
        setInterval(() =>{
            this.updateDate()
        }, 1000)
        
    }
    updateDate() {
        let d = new Date()
        this.heures = d.getHours()
        this.minutes = d.getMinutes()
        this.secondes = d.getSeconds()

        this.pourcentage_secondes = (this.secondes/60)*360
        this.aiguille_secondes = document.querySelector("#secondes")
        this.aiguille_secondes.style.transform = "rotate(" + this.pourcentage_secondes + "deg)"

        this.pourcentage_minutes = (this.minutes/60)*360
        this.aiguille_minutes = document.querySelector("#minutes")
        this.aiguille_minutes.style.transform = "rotate(" + this.pourcentage_minutes + "deg)"

        this.pourcentage_heures = (this.heures/12) *360  
        this.aiguille_heures = document.querySelector("#heures")
        this.aiguille_heures.style.transform = "rotate(" + this.pourcentage_heures + "deg)"
        
    }
   
    
    
   
    // Ajoute un background image dans l'horloge
    ajoutBackgroundimage(){
        this.horloge_div = document.querySelector("#horloge")
        this.horloge_div.style.backgroundImage = "url('images/kitten.jpg')"
    }

    couleurAiguille(){
        // click n'importe où sur l'horloge, les 3 aiguilles devront changé de couleur pour une nouvelle couleur aléatoire.
        this.horloge_div.addEventListener("click", e=> {
            this.r = randomInt(0, 255)
            this.g = randomInt(0, 255)
            this.b = randomInt(0, 255)
            this.couleur = "rgb(" + this.r + "," + this.g + "," + this.b + ")"
            this.aiguilles = document.querySelectorAll(".aiguille")
            
            for ( let i = 0; i < this.aiguilles.length; i++) {
                e.preventDefault()
                this.aiguilles[i].style.backgroundColor = this.couleur
                // transition de couleur sur les aiguille soit animée.
                this.aiguilles[i].style.transition = "background-color 2s";
        }
        })
    }

}