
class DateInput extends CheckBoxItem {
    constructor(props) {
        super(props);
        this.idInput = `date-input-${props.key}`;

        this.render = () => {
            this.unMount();
            this.containerNode = stringToHTML(`
                <div class="filter-group-line">
                  <label for="${this.idInput}" class="form-label">${this.label}</label>
                  <input type="date" value="" id="${this.idInput}">
                </div>
            `);

            this.parentNode.append(this.containerNode);
            this.inputNode = document.getElementById(this.idInput);
            this.inputNode.nodeValue = props.value;
        }
    }
}
