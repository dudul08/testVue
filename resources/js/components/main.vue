<template>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mon composant</div>

                    <div class="card-body">
                        <input v-model="libelleReference" type="text">
                        <div class="btn btn-primary" v-on:click="ajouterObjet1">Ajouter !</div>

                        <div class="row mt-3" v-for="(reference, index) in listLibelleReference">
                            <ligne v-bind:objet1="reference" v-bind:listLibelleReference="listLibelleReference" v-bind:index="index"/>


                            <!--                            <div class="col-2 mr-3"> {{reference.libelle_reference}}</div>
                                                        <input type="text" v-model="code" name="" id="">
                                                        <div class="btn btn-danger col-2" v-on:click="supprimerFruit(index)">Supprimer</div>-->
                        </div>

                    </div>
                    <div class="btn btn-success" v-on:click="store">Sauvegarder</div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>

    import Ligne from './ligne';

    export default {

        mounted() {
            console.log('Component mounted.' + ' Cool !')
        },
        methods: {
            ajouterObjet1: function () {

                let objetN = {nom: '', prenom: '',actif:true,niveau:'Test2'};
                objetN.nom = this.libelleReference;
                this.listLibelleReference.push(objetN);
                // this.store(this.libelle_reference);
                this.libelleReference = '';

            },

            supprimerFruit: function (index) {
                let vm = this;
                let txt = this.txt;
                //vm.listLibelleReference.splice(index, 1);
                alert(this.code);
            },
            store_: function (libelle_reference) {
                axios.post('http://testvue.test/references', {libelle_reference: libelle_reference})
                    .then(response => console.log(response))
                    .catch(error => console.log(error));
            },
            store: function () {
                axios.post('http://testvue.test/references', {listLibelleReference: this.listLibelleReference})
                    .then(response => console.log(response))
                    .catch(error => console.log(error));
            }
        }, data() {
            return {
                libelleReference:'',
                objet1: {
                    nom: 'SUPPIN',
                    prenom: 'Guillaume',
                    actif:'true',
                    niveau:'Test2'

                },
                listLibelleReference: []
            }
        }, components: {
            Ligne
        }

    }
</script>
