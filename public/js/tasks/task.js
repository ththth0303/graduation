
var  th = new Vue({
    el: '#create-task',
    data: {
        users: [
        ],
        user: {},
        selectUsers: []
    },

    mounted : function(){
        //
    },

    methods: {
        searchUsers: function (e) {
            if(e.target.value) {
                axios.get('/user/search/' + e.target.value).then((response) => {
                    // console.log(response)
                    this.users = response.data;
                });
            } else {
                this.users = '';
            }

        },
        addUser: function (user) {
            // console.log(this.checkUsers(user.id));

            if (this.checkUsers(user.id)) {
                this.selectUsers.push(user);
            }
        },
        checkUsers: function (id) {
            for (var i = this.selectUsers.length - 1; i >= 0; i--) {
                if (this.selectUsers[i].id == id) {
                    return false;
                }
            }
            return true;
        },
        deleteUser: function(id) {
            for (var i = this.selectUsers.length - 1; i >= 0; i--) {
                if (this.selectUsers[i].id == id) {
                    this.selectUsers.splice(i,1);
                    return
                }
            }
        },
        createTask: function () {
            this.task.attach = $("input[name ='attach']").val();
            let formData = new FormData();
            formData.append('task', this.task);
            formData.append('attach', this.task.attach);
            axios.post('/task', formData).then((response) => {
                    console.log(response)
                });
        },
        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length) {
                console.log('no files');
            }
            this.task.attach = files[0];
        }
    }
});


$('#start-date').daterangepicker({
    singleDatePicker: true,
    locale: {
        format: 'YYYY/MM/DD'
    }
});
$('#start-date').on('apply.daterangepicker', function(ev, picker) {
    //do something, like clearing an input
    $('#end-date').daterangepicker({
        singleDatePicker: true,
        locale: {
        format: 'YYYY/MM/DD'
    },
        minDate: $('#start-date').val().split(" ")[0]
    });
});
$('#end-date').daterangepicker({
    singleDatePicker: true,
    locale: {
        format: 'YYYY/MM/DD'
    },
    minDate: $('#start-date').val().split(" ")[0]
});

