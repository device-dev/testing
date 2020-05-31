<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<body>



    <div id="app">

        <div class="container">

            <div class="row">

                <div v-for="Users in User">
                    <div class="card" style="width: 21rem;">


                        <div class="card-body">
                            <b> ชื่อ-นามสกุล :</b> {{ Users.first_name }} {{ Users.last_name }}
                            <br>
                            <p><b>ปีเกิด :</b> {{ Users.dob }} </p>
                            <p><b>เพศ:</b> {{ Users.gender }} </p>

                            <p><b>เบอร์โทรศัพท์ :</b> {{ Users.phone }} </p>
                            <p class="card-text"><b> ที่อยู่ :</b> {{ Users.address }}</p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"> </script>
<script>
    let vm = new Vue({
        el: "#app",
        data: {
            User: [],

            Users: {
                first_name: '',
                last_name: '',
                gender: '',
                phone: '',
                address: '',
            }


        },
        created: function() {

            this.datauser();
        },
        methods: {
            datauser: function() {

                axios.get('https://gorest.co.in/public-api/users', {
                        headers: {
                            Authorization: 'Bearer ' + 'EQNHs0vvyvX7dBNeg75HHhS1-DTYKMFX1BPF'
                        }
                    })
                    .then(function(response) {


                        console.log(response.data.result);

                        vm.User = response.data.result;





                    });
            },


        }
    });
</script>