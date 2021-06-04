/**
 * @typedef {Object} IButtonOption
 * @property {String} id
 * @property {String} label
 */

/**
 * @typedef {Object} IDropdownButtonProps
 * @property {Element} parentNode
 * @property {String} label
 * @property {function} onClickOption
 * @property {IButtonOption[]} options
 */
 

class DropdownButton {
    /**
     * 
     * @param {IDropdownButtonProps} props 
     */
  constructor(props) {
      
    this.selectors = {
      dropdownMenu: `.dropdown-menu`,
      dropdownOpener: `.dropdown-opener`,
    };

    this.parentNode = props.parentNode;
    this.containerBtn = null;
    this.openerNode = null;
    this.dropdownMenuNode = null;
    this.optionNodes = [];

    /**
     * @type {IButtonOption[]}
     */
    this.options = props.options;
    this.label = props.label;

    /**
     * @type {function}
     */
    this.onClickOption = (option) => {
        this.toggleDropdownMenu();
        props.onClickOption(option);
    };

    this.toggleDropdownMenu = () => {
      this.containerNode.classList.toggle("show");
    };

    this.syncWithRender = () => {
      this.optionNodes = [];

      /** add event listener and pass option object to the callback */
      this.options.forEach((option) => {
        const node = document.getElementById(option.id);
        if (node) {
          node.addEventListener("click", () => this.onClickOption(option));
          this.optionNodes.push(node);
        }
      });

      this.dropdownMenuNode = this.containerNode.querySelector(
        this.selectors.dropdownMenu
      );

      /** add opener event listener */
      this.openerNode = this.containerNode.querySelector(
        this.selectors.dropdownOpener
      );
      if (this.openerNode) {
        this.openerNode.addEventListener("click", this.toggleDropdownMenu);
      }
    };

    this.unMount = () => {
      this.containerNode &&
        this.containerNode.parentNode.removeChild(this.containerNode);

      /** remove any previous event listeners */
      Array.prototype.forEach.call(this.optionNodes, (node) => {
        node.removeEventListener("click", this.onClickOption);
      });
      this.optionNodes = [];
    };

    this.render = () => {
      this.unMount();

      this.containerNode = stringToHTML(`            
            <div class="dropdown-wrapper" ${props.id}>
                  <button class="btn-primary dropdown-opener" > 
                    <span> ${this.label} </span>
                  </button>

                  <div class="dropdown-menu box-shadow-re-use" >
                     ${this.options.map(
                       (item) => `
                        <button  class="btn-secondary dropdown-option" id="${item.id}"> ${item.label} </button>
                     `
                     )}
                  </div>
              </div>
        `);
      
      this.parentNode.appendChild(this.containerNode);

      this.syncWithRender();
    };

    this.render();
  }
}
