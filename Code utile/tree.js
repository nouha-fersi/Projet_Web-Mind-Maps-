function init() {
    // Since 2.2 you can also author concise templates with method chaining instead of GraphObject.make
    // For details, see https://gojs.net/latest/intro/buildingObjects.html
    const $ = go.GraphObject.make;  // for conciseness in defining templates
    myDiagram =
      $(go.Diagram, "myDiagramDiv",  // must be the ID or reference to div
        {
          "toolManager.hoverDelay": 100,  // 100 milliseconds instead of the default 850
          allowCopy: false,
          layout:  // create a TreeLayout for the family tree
            $(go.TreeLayout,
              { angle: 90, nodeSpacing: 10, layerSpacing: 40, layerStyle: go.TreeLayout.LayerUniform })
        });

        var bluegrad = '#90CAF9';
        var pinkgrad = '#F48FB1';

    // get tooltip text from the object's data
    function tooltipTextConverter(person) {
        var str = "";
        return str;
      }
  
    // define tooltips for nodes
    var tooltiptemplate =
      $("ToolTip",
        { "Border.fill": "whitesmoke", "Border.stroke": "black" },
        $(go.TextBlock,
          {
            font: "bold 8pt Helvetica, bold Arial, sans-serif",
            wrap: go.TextBlock.WrapFit,
            margin: 5
          },
          new go.Binding("text", "", tooltipTextConverter))
      );

    // define Converters to be used for Bindings
    function genderBrushConverter(gender) {
        if (gender === "M") return bluegrad;
        if (gender === "F") return pinkgrad;
        return "orange";
      }

    // replace the default Node template in the nodeTemplateMap
    myDiagram.nodeTemplate =
    $(go.Node, "Auto",
    { deletable: false, toolTip: tooltiptemplate },
        new go.Binding("text", "name"),
        $(go.Shape, "Rectangle",
          {
            fill: "lightgray",
            stroke: null, strokeWidth: 0,
            stretch: go.GraphObject.Fill,
            alignment: go.Spot.Center
          },
          new go.Binding("fill", "gender", genderBrushConverter)),
          $(go.TextBlock,
            {
              font: "700 12px Droid Serif, sans-serif",
              textAlign: "center",
              margin: 10, maxSize: new go.Size(80, NaN)
            },
          new go.Binding("text", "name"))
      );

    // define the Link template
    myDiagram.linkTemplate =
    $(go.Link,  // the whole link panel
    { routing: go.Link.Orthogonal, corner: 5, selectable: false },
        $(go.Shape, { strokeWidth: 3, stroke: '#424242' }));  // the gray link shape

    // here's the family data
    var nodeDataArray = [
      { key: 0, name: "George V"},
      { key: 1, parent: 0, name: "USA"},
      { key: 2, parent: 0, name: "JAPAN"},
      { key: 3, parent: 0, name: "GERMANY"},
      { key: 4, parent: 0, name: "ITALY" },
      { key: 5, parent: 0, name: "SPAIN"},
      { key: 6, parent: 0, name: "EGYPT"}
    ];

    // create the model for the family tree
    myDiagram.model = new go.TreeModel(nodeDataArray);

    document.getElementById('zoomToFit').addEventListener('click', () => myDiagram.commandHandler.zoomToFit());

    document.getElementById('centerRoot').addEventListener('click', () => {
      myDiagram.scale = 1;
      myDiagram.scrollToRect(myDiagram.findNodeForKey(0).actualBounds);
    });

  }
  window.addEventListener('DOMContentLoaded', init);