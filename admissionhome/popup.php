<form id="form1" runat="server">
    <ww:wwWebErrorDisplay runat="server" id="ErrorDisplay" />

    <div class="contentcontainer">
        <h2>Slow Submit Operation</h2>
        
        <p>
            The following button click will take a few seconds to run.
            If your code doesn't do anything, the application will appear
            to simply be unresponsive but the existing form is still active
            daring the user to click the submit button again... and again...
            and again.
        </p>        
        
        <hr />
        <ww:wwWebButton runat="server" id="btnSubmit" Text="Submit to Server" 
                        CssClass="submitbutton"  Click="btnSubmit_Click"/>

    </div>
</form>