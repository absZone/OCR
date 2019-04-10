//form id #form1, call validation of form
            $("#form1").validate({
                //setup rules for validation
                rules: {
                    //element id courseName
                    courseName: {
                        //validation property
                        required: true
                    },
                    courseType: {
                        required: true
                    }
                },
                //display error messages
                messages: {
                    //element id courseName
                    courseName: {
                        //validation property and message value
                        required: 'Required Field'
                    },
                    courseType: {
                        required: 'Select Type of Course...'
                    },
                },
                //Call Element Validation on focus out from element
                onfocusout: function(element) {
                    this.element(element);
                },
                //Call Form Validation on Submit
                submitHandler: function(form) {
                    show_loading_bar(20);
                    
                    var submitted_courseName = $("#courseName").val(),
                        submitted_courseType = $("#courseType").val();


                    $.ajax({
                        url: "../scripts/addcoursescript.php", // Your php script to wait for login connections and set login sessions
                        type: "POST",
                        // You can access the user and pass with $_POST['username'] and $_POST['password']
                        data: {
                            CourseName: submitted_courseName,
                            CourseType: submitted_courseType
                        },

                        success: function(response_text) // response_text - is what you output based on user login information, lets suggest you output numbers i.e. 1 means logged in, 2 password incorred, 3 any other reason...
                        {
                            show_loading_bar(65);
                            if (response_text == 1) {
                                show_loading_bar({
                                    pct: 100,
                                    finish: function(pct) {
                                        toastr.info("Course Inserted Successfully");
                                        hide_loading_bar();
                                    }
                                });
                            } else if (response_text == 2) {
                                show_loading_bar({
                                    pct: 100,
                                    finish: function(pct) {
                                        toastr.info("Course Updated Successfully");
                                        hide_loading_bar();
                                    }
                                });
                            } else {
                                show_loading_bar({
                                    pct: 65,
                                    finish: function(pct) {
                                        toastr.info("Some Error Occured");
                                        hide_loading_bar();
                                    }
                                });
                            }
                            document.getElementById("form1").reset();
                        }
                    });
                    return false;
                }
            });