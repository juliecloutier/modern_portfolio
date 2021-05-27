
new Vue({
    el: "#app",
    data: {
        isActive: false,
        squares: [null, null, null, null, null, null, null, null, null],
        jeu: false,
        tour: "X",
        victoire: false, 
        gagnant : "",
        jouer: "Jouer!",
        replay: false,
        
    },
    methods: {
        
        
        // Changer de tour après avoir cliquer
        changerTour: function(index){ 
            
            // Vérifier si la case est déjà utiliser
            if (this.squares[index] == null){
                // ajouter le X ou O dans la casse
                Vue.set(this.squares, index, this.tour)
                
                this.checkGame() //vérifie si le joueur à gagné

                // changer de joueur
                if (this.tour == "X"){
                    this.tour = "O"
                } else if (this.tour == "O"){
                    this.tour = "X"
                }

            }
                
        },

         // Vérifier si joueur a gagné     
         checkGame: function(a,b,c){
           
            let carre = this.squares
            this.testerLigne(carre[0],carre[1],carre[2]) // première ligne
            this.testerLigne(carre[3],carre[4],carre[5]) // deuxième ligne
            this.testerLigne(carre[6],carre[7],carre[8]) // troisième ligne

            this.testerLigne(carre[0],carre[3],carre[6]) //première colonne
            this.testerLigne(carre[1],carre[4],carre[7]) //deuxième colonne
            this.testerLigne(carre[2],carre[5],carre[8]) //troisième colonne

            this.testerLigne(carre[0],carre[4],carre[8]) //diagonale 
            this.testerLigne(carre[2],carre[4],carre[6]) //diagonale
            

            
        },
        
        testerLigne: function(a,b,c){
            if(a !== null && a === b && b === c){
                
                this.jeu = false 
                this.victoire = true
                this.gagnant = "Le gagnant est " + this.tour      
                this.jouer = "Rejouer" 
                this.isActive = false
                this.squares = [null, null, null, null, null, null, null, null, null]
            }else if(this.squares[0] !== null && this.squares[1] !== null && this.squares[2] !== null && this.squares[3] !== null && this.squares[4]
                 !== null && this.squares[5] !== null && this.squares[6] !== null && this.squares[7] !== null&&  this.squares[8] !== null  ){
                    this.jeu = false 
                    this.victoire = true
                    this.gagnant = "Le match est nul"    
                    this.replay = true
                    this.isActive = false
                    this.squares = [null, null, null, null, null, null, null, null, null]
                    this.jouer = "Rejouer" 

                     

            }
           
        },

          
    },
    
})