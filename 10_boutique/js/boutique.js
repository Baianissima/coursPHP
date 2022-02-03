// Condition 2 ( pour tester la longueur - length - du mot de passe ) : l'utilisateur a-t-il saisit le même mot de passe, la condition : si confmdp2 est différent de mdp2 (si le premier mdp tapé est different du 2eme mdp) :

    // length = longueur
    
    let placeholder1 = document.getElementById('placeholder1');

    if (confmdp2 !== mdp2) {  // si le mdp est différent
        // event.target.mdp2.classList.add("error");
        // event.target.mdp2.classList.remove("valide");
        // event.target.confmdp2.classList.add("error");
        // event.target.confmdp2.classList.remove("valide");

        placeholder1.innerHTML = "Vos mots de passe doivent être identiques";
        placeholder1.classList.add("rouge");

        document.getElementById('placeholder2').classList.add("rouge");
        // alert('Vous avez saisi deux mots de passe différents !');

        document.getElementById('placeholder2').innerHTML = "Vos mots de passe doivent être identiques !";

        // l'alert remplace les 4 lignes de code

    } else if (mdp2.length < 5 || mdp2.length > 15) {  // sinon, si le mot de passe est trop court
        event.target.mdp2.classList.add("error");
        event.target.mdp2.classList.remove("valide");
        event.target.confmdp2.classList.add("error");
        event.target.confmdp2.classList.remove("valide");
        // l'alert remplace les 4 lignes de code
        // alert('Votre mot de passe est trop court ou trop lent !');

    } else {  // et finalement, si le mdp respecte les 2 conditions, tout est bon !
        event.target.mdp2.classList.add("valide");
        event.target.mdp2.classList.remove("error");
        event.target.confmdp2.classList.add("valide");
        event.target.confmdp2.classList.remove("error");
    }

        // if ((confmdp2 !== mdp2) || (mdp2.length < 5) || (mdp2.length > 15)) {
        //     alert('Pas bon !');
        // } else {
        //         alert('Ok !');
        // }

