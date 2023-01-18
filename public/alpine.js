document.addEventListener('alpine:init', () => {
    Alpine.data('hello', () => ({
        message: 'I Love Alpine',
    }))


    Alpine.data('users', () => ({
        role: null,

        //Menyimpan data ke LocalStorage
        setRole(value) {
            localStorage.setItem('role', value)
        },

        getRole() {
            //API FETCH USER LOGGED IN

            //Menyimpan data ke LocalStorage
            // localStorage.setItem('role', 'customer')

            //Mengambil data dari LocalStorage
            // localStorage.getItem('role')

            this.role = localStorage.getItem('role')
        },

        //Menghapus data dari LocalStorage
        deleteRole() {
            //Menghapus data dari local storage berdasarkan key
            localStorage.removeItem('role')
            //Menghapus semua data dari localstorage
            // localStorage.clear()
        }
    }))

    Alpine.data('movies', () => ({
        baseUrl: 'https://imdb8.p.rapidapi.com',

        apiKey: 'b24ac0a332msh35fb7ffb6bac512p16d9afjsne00891490a30',

        // token: localStorage.getItem('token'),

        listMovies: {},

        /**
         * loading state
         */
        isLoading: false,

        async getMovies(searchKey) {
            this.isLoading = true
            // fetch API
            // var searchKey = this.$wire.searchKey ?? 'batman'
            var response = await fetch(this.baseUrl + `/auto-complete?q=${searchKey}`, {
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': this.apiKey,
                    'X-RapidAPI-Host': 'imdb8.p.rapidapi.com',
                    // 'token': this.token
                }
            })

            // //Consume Response API
            // console.log("response1", response)

            response = await response.json()
            // console.log("response2", response)

            this.listMovies = response.d
            console.log("listMovies", this.listMovies)

            /**
             * loading done
             */
            this.isLoading = false

        }
    }))
})