<%@ Control Language="C#" AutoEventWireup="True" CodeBehind="PhotoManager.ascx.cs"
    Inherits="ATouchOfClassImages.PhotoManager" %>
    <h3><asp:Label ID="lblPhotoManagerDirectory" runat="server"></asp:Label></h3>
    <asp:Panel ID="pnlPhotos" runat="server" Width="100%" style="height:240px; margin-top:-15px; overflow:auto; padding-bottom: 1em;">
    <table>
    <tr>
        <asp:Repeater  ID="RepeaterImages" runat="server" >
            <ItemTemplate>
                        <td>
                            <div>
                            <a href='<%# Container.DataItem %>'><asp:Image style="padding:5px;" ID="Image" runat="server" ImageUrl='<%# Container.DataItem %>' Height="200"  /></a>
                            </div>
                            <div>
                            <center><asp:CheckBox  CssClass='<%# Container.DataItem %>' ID="cbDelete" OnClick="javascript:if (!confirm('Are you sure')) {this.checked=false;return;}"  OnCheckedChanged="cbDeleteClicked" runat="server" AutoPostBack="true" Text="Delete" /></center>
                            </div>
                        </td>
            </ItemTemplate>
        </asp:Repeater>
    </tr>
    </table>
    </asp:Panel>
<asp:Panel ID="pnlControl" runat="server" GroupingText="Add a file">
    <asp:UpdatePanel ID="photomanagerupdatePanel" runat="server" UpdateMode="Conditional">
        <Triggers>
            <asp:PostBackTrigger ControlID="btnSave" />
        </Triggers>
        <ContentTemplate>
            <asp:FileUpload ID="FileUploadControl" runat="server" />
            <br />
            <asp:Label ID="StatusLabel" runat="server" ForeColor="Green" />
            <asp:Button ID="btnSave" Text="Upload" runat="server" OnClick="UploadButton_Click"
                Style="display: none;" />
        </ContentTemplate>
    </asp:UpdatePanel>
</asp:Panel>
