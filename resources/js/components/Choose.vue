<template>
    <div>
        <section class="text-white flex justify-center">
            <img alt="" src="img/secret-santa.png">
            <div class="">
                <h1 class="text-5xl text-center font-bold align-middle">Bako Secret <span
                        class="text-6xl font-extrabold border-white font-sans">Shame</span> Santa</h1>
                <div class="p-4 text-center">
                    <div class="inline-block relative w-64">
                        <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                v-model="giver">
                            <option :value="profile" v-for="profile in profiles">{{profile.name}}</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    <button @click.prevent="makeGift"
                            class="bg-transparent hover:bg-white text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                        Give Present
                    </button>
                    <button @click.prevent="show=!show"
                            class="bg-transparent hover:bg-white text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                        Show/Hide
                    </button>
                </div>
            </div>
        </section>
        <section class="py-5 px-32">
            <div class="flex justify-around border-b border-white py-5" v-for="result in results">
                <div class="">
                    <img :src="result.giver.avatar" alt="">
                    <p class="text-white text-center text-xl">{{result.giver.name}}</p>
                </div>
                <div class="mt-6">
                    <svg id="Layer_1" style="enable-background:new 0 0 512 512; width: 100px" version="1.1"
                         viewBox="0 0 512 512" x="0px" xml:space="preserve"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         y="0px">
<g transform="translate(-1)">
    <path d="M140.636,307.2c-25.135,17.687-27.927,34.444-27.927,65.164l0,0
		c0,43.753,37.236,74.473,37.236,74.473l0,0v37.236c0,15.825,12.102,27.927,27.927,27.927h168.495
		c15.825,0,26.996-12.102,26.996-27.927v-37.236l0,0c26.996-36.305,27.927-44.684,27.927-111.709
		c0-39.098-12.102-84.713-12.102-84.713v-0.931c5.585-16.756-3.724-35.375-20.48-40.96c-16.756-5.585-35.375,3.724-40.96,20.48
		l6.516-18.618c5.585-16.756-2.793-34.444-19.549-40.029l-1.862-0.931c-16.756-5.585-34.444,2.793-40.029,19.549l-3.724,10.24
		l28.858-153.6c1.862-10.24,0.931-21.411-4.655-29.789C287.72,6.516,278.411,0,268.171,0l0,0c-17.687,0-30.72,20.48-33.513,37.236
		l-27.927,176.873L177.873,46.545c-4.655-20.48-13.964-37.236-31.651-37.236c-11.171,0-20.48,6.516-26.996,15.825
		c-5.585,8.378-6.516,18.618-5.585,28.858l26.996,178.735l12.102,64.233L140.636,307.2z" style="fill:#FDC794;"/>
    <g>
        <path d="M324.956,377.949c-4.655,0-9.309-0.931-13.964-1.862c-10.24-3.724-18.618-11.171-24.204-21.411
			c-4.655-10.24-5.585-21.411-1.862-31.651l33.513-96.815c3.724-10.24,11.171-18.618,21.411-24.204
			c10.24-4.655,21.411-5.585,31.651-1.862c10.24,3.724,18.618,11.171,24.204,21.411c5.585,10.24,5.585,21.411,1.862,31.651
			l-33.513,96.815c-3.724,10.24-11.171,18.618-21.411,24.204C337.989,376.087,331.473,377.949,324.956,377.949z M358.469,215.971
			c-3.724,0-7.447,0.931-10.24,2.793c-5.585,2.793-10.24,7.447-12.102,13.033l-33.513,96.815
			c-1.862,5.585-1.862,12.102,0.931,17.687c2.793,5.585,7.447,10.24,13.033,12.102l0,0c5.585,1.862,12.102,1.862,17.687-0.931
			c5.585-2.793,10.24-7.447,12.102-13.033l33.513-96.815c1.862-5.585,1.862-12.102-0.931-17.687
			c-2.793-5.585-7.447-10.24-13.033-12.102C363.124,215.971,361.262,215.971,358.469,215.971z"
              style="fill:#F9A671;"/>
        <path d="M179.735,375.156c-3.724,0-7.447-1.862-8.378-5.585c-1.862-4.655,0-10.24,4.655-12.102
			c22.342-9.309,81.92-59.578,94.022-89.367c2.793-8.378,0.931-18.618-4.655-23.273c-7.447-5.585-19.549-3.724-34.444,6.516
			c-14.895,10.24-53.062,39.098-84.713,63.302c-3.724,2.793-10.24,2.793-13.033-1.862c-2.793-3.724-2.793-10.24,1.862-13.033
			c28.858-22.342,68.887-53.062,85.644-64.233c30.72-20.48,49.338-11.171,55.855-5.585c12.102,10.24,16.756,27.927,10.24,44.684
			c-13.964,35.375-78.196,88.436-103.331,99.607C181.596,375.156,180.665,375.156,179.735,375.156z"
              style="fill:#F9A671;"/>
        <path d="M267.24,348.16c-4.655,0-9.309-0.931-13.033-1.862l-1.862-0.931
			c-6.516-2.793-13.033-6.516-17.687-13.033c-2.793-3.724-2.793-8.378,0-12.102c17.687-21.411,30.72-40.96,35.375-52.131
			c4.655-11.171-2.793-28.858-13.964-33.513c-4.655-1.862-6.516-6.516-4.655-11.171l13.033-37.236
			c7.447-21.411,30.72-32.582,52.131-25.135l1.862,0.931c10.24,3.724,18.618,11.171,23.273,20.48
			c4.655,10.24,5.585,21.411,1.862,31.651l-37.236,107.055C299.822,336.989,283.996,348.16,267.24,348.16z M254.207,325.818
			c0.931,0.931,2.793,1.862,3.724,1.862l1.862,0.931c12.102,3.724,24.204-1.862,28.858-13.964l37.236-107.055
			c1.862-5.585,1.862-12.102-0.931-16.756c-2.793-5.585-7.447-9.309-13.033-11.171l0,0l-1.862-0.931
			c-12.102-3.724-24.204,1.862-28.858,13.964l-10.24,29.789c14.895,12.102,23.273,35.375,15.825,53.062
			C282.135,287.651,270.033,305.338,254.207,325.818z" style="fill:#F9A671;"/>
    </g>
</g>

</svg>
                    <svg height="100px" id="Capa_1" style="enable-background:new 0 0 286.614 286.614;"
                         version="1.1" viewBox="0 0 286.614 286.614" width="100px" x="0px"
                         xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         y="0px">
<g>
    <path d="M270.126,105.055H146.394l23.487-18.548c7.147-5.643,8.364-16.011,2.721-23.156c-5.643-7.146-16.012-8.365-23.156-2.721   c0,0-40.819,33.689-60.28,47.603c-13.14,9.395-25.402,20.959-25.402,38.096v39.537c0,24.077,19.588,43.666,43.665,43.666   c17.677,0,61.369,0,77.789,0c9.106,0,16.487-7.382,16.487-16.487c0-5.927-3.138-11.108-7.833-14.014h5.359   c9.105,0,16.487-7.382,16.487-16.487c0-5.927-3.138-11.108-7.833-14.014h3.71c9.105,0,16.487-7.382,16.487-16.487   c0-5.927-3.138-11.108-7.832-14.014h49.874c9.105,0,16.487-7.382,16.487-16.487S279.232,105.055,270.126,105.055z"
          fill="#FFFFFF"/>
    <path d="M37.885,110.781H9.282c-5.126,0-9.282,4.156-9.282,9.282V220.25c0,5.126,4.156,9.282,9.282,9.282h28.603   c5.126,0,9.282-4.156,9.282-9.282V120.063C47.167,114.936,43.011,110.781,37.885,110.781z"
          fill="#FFFFFF"/>
</g>

</svg>
                </div>
                <div class="" v-if="show">
                    <img :src="result.taker.avatar" alt="">
                    <p class="text-white text-center text-xl">{{result.taker.name}}</p>
                </div>
                <div class="" v-else>
                    <img :src="'img/'+result.taker.sex+'.png'" alt="">
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show: false,
                giver: {},
                profiles: [
                    {
                        "name": "Volen Vulkov",
                        "sex": "m",
                        "avatar": "img/volen.png"
                    },
                    {
                        "name": "Tisho Iordanov",
                        "sex": "m",
                        "avatar": "img/tisho.png"
                    },
                    {
                        "name": "Borislav Borisov",
                        "sex": "m",
                        "avatar": "img/bore.png"
                    },
                    {
                        "name": "Valdis Hinkov",
                        "sex": "m",
                        "avatar": "img/valdi.png"
                    },
                    {
                        "name": "Venelin Petrov",
                        "sex": "m",
                        "avatar": "img/venelin.png"
                    },
                    {
                        "name": "Miroslav Gorchev",
                        "sex": "m",
                        "avatar": "img/miro.png"
                    },
                    {
                        "name": "Angel Radoev",
                        "sex": "m",
                        "avatar": "img/angel.png"
                    },
                    {
                        "name": "Viktor Lalev",
                        "sex": "m",
                        "avatar": "img/viktor.png"
                    },
                    {
                        "name": "Ivan Krastilov",
                        "sex": "m",
                        "avatar": "img/vasko.png"
                    },
                    {
                        "name": "Dobromir Kotsev",
                        "sex": "m",
                        "avatar": "img/dobri.png"
                    },
                    {
                        "name": "Dimitar Dishev",
                        "sex": "m",
                        "avatar": "img/dishev.png"
                    },
                    {
                        "name": "Mitko Ivanov",
                        "sex": "m",
                        "avatar": "img/mitko.png"
                    },
                    {
                        "name": "Petar Nikolov",
                        "sex": "m",
                        "avatar": "img/pesho.png"
                    },
                    {
                        "name": "Радослав Тахтаджийски",
                        "sex": "m",
                        "avatar": "img/rado.png"
                    },
                    {
                        "name": "Atanas Runyov",
                        "sex": "m",
                        "avatar": "img/nasko.png"
                    },
                    {
                        "name": "Todor K Kanev",
                        "sex": "m",
                        "avatar": "img/toshko.png"
                    },
                    {
                        "name": "Faraonq",
                        "sex": "m",
                        "avatar": "img/faraonq.png"
                    },
                    {
                        "name": "Kristina Toneva",
                        "sex": "f",
                        "avatar": "img/kristina-toneva.png"
                    },
                    {
                        "name": "Gergana Tasheva",
                        "sex": "f",
                        "avatar": "img/geri.png"
                    },
                    {
                        "name": "Denitsa Neshkova",
                        "sex": "f",
                        "avatar": "img/deni.png"
                    },
                    {
                        "name": "Ана-Мария Ташева",
                        "sex": "f",
                        "avatar": "img/ana-maria.png"
                    },
                    {
                        "name": "Христина Петкова",
                        "sex": "f",
                        "avatar": "img/hristina.png"
                    },
                    {
                        "name": "Victoria Chilingirova",
                        "sex": "f",
                        "avatar": "img/viki.png"
                    },
                    {
                        "name": "Desislava Sirakova",
                        "sex": "f",
                        "avatar": "img/desi.png"
                    },
                    {
                        "name": "Ani Sarieva",
                        "sex": "f",
                        "avatar": "img/ani.png"
                    },
                    {
                        "name": "Maria Shiderska",
                        "sex": "f",
                        "avatar": "img/mimi.png"
                    },
                    {
                        "name": "Gergana Nikolova",
                        "sex": "f",
                        "avatar": "img/gagi.png"
                    },
                    {
                        "name": "Ceci Nikolova",
                        "sex": "f",
                        "avatar": "img/ceci.png"
                    },
                    {
                        "name": "Dilqna Pencheva",
                        "sex": "f",
                        "avatar": "img/didi.png"
                    },
                    {
                        "name": "Pavlina Kozareva",
                        "sex": "f",
                        "avatar": "img/poli.png"
                    },
                    {
                        "name": "Gabriela Nenova",
                        "sex": "f",
                        "avatar": "img/gabi.png"
                    },
                    {
                        "name": "Yoana Vasileva",
                        "sex": "f",
                        "avatar": "img/yo.png"
                    },
                    {
                        "name": "Miglena Ivanova",
                        "sex": "f",
                        "avatar": "img/megi.png"
                    },
                    {
                        "name": "Kristina Runyova",
                        "sex": "f",
                        "avatar": "img/krisi.png"
                    },
                    {
                        "name": "Elena Kyorova",
                        "sex": "f",
                        "avatar": "img/elena.png"
                    },
                    {
                        "name": "Nikolina Nevyanova",
                        "sex": "f",
                        "avatar": "img/nikolina.png"
                    },
                    {
                        "name": "Милия Манджукова",
                        "sex": "f",
                        "avatar": "img/milia.png"
                    },
                    {
                        "name": "Vesela Arabadzhiyska",
                        "sex": "f",
                        "avatar": "img/vesela.png"
                    },
                ],
                possibleTakers: [
                    {
                        "name": "Volen Vulkov",
                        "sex": "m",
                        "avatar": "img/volen.png"
                    },
                    {
                        "name": "Tisho Iordanov",
                        "sex": "m",
                        "avatar": "img/tisho.png"
                    },
                    {
                        "name": "Borislav Borisov",
                        "sex": "m",
                        "avatar": "img/bore.png"
                    },
                    {
                        "name": "Valdis Hinkov",
                        "sex": "m",
                        "avatar": "img/valdi.png"
                    },
                    {
                        "name": "Venelin Petrov",
                        "sex": "m",
                        "avatar": "img/venelin.png"
                    },
                    {
                        "name": "Miroslav Gorchev",
                        "sex": "m",
                        "avatar": "img/miro.png"
                    },
                    {
                        "name": "Angel Radoev",
                        "sex": "m",
                        "avatar": "img/angel.png"
                    },
                    {
                        "name": "Viktor Lalev",
                        "sex": "m",
                        "avatar": "img/viktor.png"
                    },
                    {
                        "name": "Ivan Krastilov",
                        "sex": "m",
                        "avatar": "img/vasko.png"
                    },
                    {
                        "name": "Dobromir Kotsev",
                        "sex": "m",
                        "avatar": "img/dobri.png"
                    },
                    {
                        "name": "Dimitar Dishev",
                        "sex": "m",
                        "avatar": "img/dishev.png"
                    },
                    {
                        "name": "Mitko Ivanov",
                        "sex": "m",
                        "avatar": "img/mitko.png"
                    },
                    {
                        "name": "Petar Nikolov",
                        "sex": "m",
                        "avatar": "img/pesho.png"
                    },
                    {
                        "name": "Радослав Тахтаджийски",
                        "sex": "m",
                        "avatar": "img/rado.png"
                    },
                    {
                        "name": "Atanas Runyov",
                        "sex": "m",
                        "avatar": "img/nasko.png"
                    },
                    {
                        "name": "Todor K Kanev",
                        "sex": "m",
                        "avatar": "img/toshko.png"
                    },
                    {
                        "name": "Faraonq",
                        "sex": "m",
                        "avatar": "img/faraonq.png"
                    },
                    {
                        "name": "Kristina Toneva",
                        "sex": "f",
                        "avatar": "img/kristina-toneva.png"
                    },
                    {
                        "name": "Gergana Tasheva",
                        "sex": "f",
                        "avatar": "img/geri.png"
                    },
                    {
                        "name": "Denitsa Neshkova",
                        "sex": "f",
                        "avatar": "img/deni.png"
                    },
                    {
                        "name": "Ана-Мария Ташева",
                        "sex": "f",
                        "avatar": "img/ana-maria.png"
                    },
                    {
                        "name": "Христина Петкова",
                        "sex": "f",
                        "avatar": "img/hristina.png"
                    },
                    {
                        "name": "Victoria Chilingirova",
                        "sex": "f",
                        "avatar": "img/viki.png"
                    },
                    {
                        "name": "Desislava Sirakova",
                        "sex": "f",
                        "avatar": "img/desi.png"
                    },
                    {
                        "name": "Ani Sarieva",
                        "sex": "f",
                        "avatar": "img/ani.png"
                    },
                    {
                        "name": "Maria Shiderska",
                        "sex": "f",
                        "avatar": "img/mimi.png"
                    },
                    {
                        "name": "Gergana Nikolova",
                        "sex": "f",
                        "avatar": "img/gagi.png"
                    },
                    {
                        "name": "Ceci Nikolova",
                        "sex": "f",
                        "avatar": "img/ceci.png"
                    },
                    {
                        "name": "Dilqna Pencheva",
                        "sex": "f",
                        "avatar": "img/didi.png"
                    },
                    {
                        "name": "Pavlina Kozareva",
                        "sex": "f",
                        "avatar": "img/poli.png"
                    },
                    {
                        "name": "Gabriela Nenova",
                        "sex": "f",
                        "avatar": "img/gabi.png"
                    },
                    {
                        "name": "Yoana Vasileva",
                        "sex": "f",
                        "avatar": "img/yo.png"
                    },
                    {
                        "name": "Miglena Ivanova",
                        "sex": "f",
                        "avatar": "img/megi.png"
                    },
                    {
                        "name": "Kristina Runyova",
                        "sex": "f",
                        "avatar": "img/krisi.png"
                    },
                    {
                        "name": "Elena Kyorova",
                        "sex": "f",
                        "avatar": "img/elena.png"
                    },
                    {
                        "name": "Nikolina Nevyanova",
                        "sex": "f",
                        "avatar": "img/nikolina.png"
                    },
                    {
                        "name": "Милия Манджукова",
                        "sex": "f",
                        "avatar": "img/milia.png"
                    },
                    {
                        "name": "Vesela Arabadzhiyska",
                        "sex": "f",
                        "avatar": "img/vesela.png"
                    },
                ],
                results: [],
                givers: [],
                takers: [],
            }
        },
        methods: {
            makeGift() {
                if (!_.isEmpty(this.giver)) {

                    var index = this.profiles.findIndex((profile) => profile.name == this.giver.name);

                    this.givers.push(this.giver);

                    this.results.unshift({
                        giver: this.giver,
                        taker: this.randomTaker()
                    });
                    this.profiles.splice(index, 1);
                    this.giver = {};

                    axios.post('api/gift',{
                        results:this.results
                    })
                }
            },
            randomTaker() {
                do {
                    var id = Math.floor(Math.random() * this.possibleTakers.length);
                    var taker = this.possibleTakers[id];
                }
                while (taker.name == this.giver.name);

                this.takers.push(taker);
                this.possibleTakers.splice(id, 1);
                return taker;
            }
        }

    }
</script>
