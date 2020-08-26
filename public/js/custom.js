var app = new Vue({
    el: '#vueapp',
    data: {
        selectedDisplay:'',
        selectedDataBundle:'',
        mietpries:'',
        desinexCount:0,
        totalAmount:0,
        totalDisplayAmount:0,
        totalDataAmount:0,
        totalOrderAmount:0,
        lastname:'',
        firstname:'',
        firma:'',
		telephone:'',
        streets:'',
        plz:'',
        ort:'',
        emailaddress:'',

        displayChoices:[
             {id:'1',display_name:'22\" WALL',valueDisplay:'86',orderCode:'ED22W'}
            ,{id:'2',display_name:'32\" WALL',valueDisplay:'86',orderCode:'ED32W'}
            ,{id:'3',display_name:'32\" STAND',valueDisplay:'86',orderCode:'ED32ST'}
            ,{id:'4',display_name:'43\" STAND',valueDisplay:'86',orderCode:'ED43ST'}
            ],
        dataChoices:[
             {id:'1', display_name:'XS 50MB',valueDisplay:'5',orderCode:'XS50MB'}
            ,{id:'2', display_name:'S 1GB',valueDisplay:'19',orderCode:'S1GB'}
            ,{id:'3', display_name:'M 5GB',valueDisplay:'29',orderCode:'M5GB'}
            ,{id:'4', display_name:'L 10GB',valueDisplay:'59',orderCode:'L10GB'}
        ],

        //online path
		image: 'public/gifs/1_7.gif',
	

    },
    methods:{
		image1: function() {
          this.image = 'public/gifs/1_7.gif';
        },
        image2: function() {
          this.image = 'public/images/zone2.png';
        },
        image3: function() {
          this.image = 'public/images/zone3.png';
        },
        image4: function() {
          this.image = 'public/images/zone4.png';
        },
		
        computedMonthlyTotal:function(){
            this.totalAmount = this.totalDataAmount + this.totalDisplayAmount;
            this.computedOrderTotal();
        },
        computedDisplayTotal:function () {
            this.totalDisplayAmount = 0;
            this.totalDisplayAmount =  parseInt(this.totalDisplayAmount) + parseInt(this.selectedDisplay.valueDisplay);
            this.computedMonthlyTotal();
        },
        computedDataTotal:function(){
            this.totalDataAmount = 0;
            this.totalDataAmount = parseInt(this.totalDataAmount) + parseInt(this.selectedDataBundle.valueDisplay);
            this.computedMonthlyTotal();
        },


        computedOrderTotal:function(){
            this.totalOrderAmount = 0;
            this.totalOrderAmount = (parseInt(this.desinexCount)*90) + parseInt(this.totalDataAmount) + parseInt(this.totalDisplayAmount);
        },
        submitEmailOrder:async function(){
            try{

                postData= {
                    'fname'         : this.firstname,
                    'lname'         : this.lastname,
                    'firma'         : this.firma,
					'telephone'     : this.telephone,
                    'streets'       : this.streets,
                    'plz'           : this.plz,
                    'ort'           : this.ort,
                    'emailaddress'  : this.emailaddress,
                    'displaybundle' : this.selectedDisplay,
                    'databundle'    : this.selectedDataBundle,
                    'desinexCount'  : this.desinexCount,};

                $('.loader').show();

               await axios.post('http://localhost/oldfuture_emailservice/api/mail/send',postData)
                    .then(function (response) {
                        if(response.status == 200){
                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            };
                            $('.loader').fadeOut(300);
                            toastr.success(response.data);
                            window.setTimeout(function(){
                                // Move to a new location or you can do something else
                                window.location.href = "https://oldfuture.ch/";
                            }, 3000);
                        }
                    })
                    .catch(function(error){
                        $('.loader').fadeOut(300);
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        };
                        toastr.error('Error in Saving Order.');
                        console.log(error);
                    })
            }
            catch (e) {
                console.log(e);
            }
            
        },



    }

})