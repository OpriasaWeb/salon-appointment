# SALON APPOINTMENT SYSTEM

<!-- Psuedocode -->
Psuedocode

<br />

Customer can browse the front page of the Salon Appointment <br />
    If customer click the 'book' button <br />
    The modal pop up and ask for a number <br />
        If the number is non-existing in the database <br />
            The 'new' would be redirected to the register account page <br />
        If the number is existing <br />
            The 'old' customer would be redirected to the booking appointment page <br />
                If the admin disabled one of their services for some reason <br />
                    The customer cannot choose that disabled service <br />
                If default, customer can choose their service with amount besides it <br />
                If the customer choose the past date <br />
                    The system should pop the warning 'cannot book past date' <br />
                        And the date automatically clicked the current date <br />
                    If the user change it for future date, that would be accepted <br />
                If the customer chooses the time that less than 9:00am or greater than 6:00pm <br />
                    The number of the time should be color red <br />
                    And the system should input X as warning that the time is not available <br />
                If the customer chooses time from 9:00am to 6:00pm <br />
                    The color of the time would be green <br />
                    And the system should pop the check mark <br />
            And now the customer satisfies the condition, he/she can now book an appointment. <br />


                    
