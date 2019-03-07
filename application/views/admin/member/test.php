<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<script src="https://cdn.bootcss.com/vue/2.4.2/vue.min.js"></script>
</head>
<body>
<style type="text/css">
body {
  font-family: Menlo, Consolas, monospace;
  color: #444;
}
.item {
  cursor: pointer;
}
.bold {
  font-weight: bold;
}
ul {
  padding-left: 1em;
  line-height: 1.5em;
  list-style-type: dot;
}
</style>


<script type="text/x-template" id="item-template">
  <li>
    <div
      :class="{bold: isFolder}"
      @click="toggle"
      @dblclick="changeType">
      {{ model.name }}
      <span ><i class="add" @click="addChild">+</i><i class="del" @click="delChild"></i>1<i class="update" @click="updateChild">=</i></span>
      <span v-if="isFolder">[{{ open ? '-' : '+' }}]</span>
    </div>
    <ul v-show="open" v-if="isFolder">
      <item
        class="item"
        v-for="(model, index) in model.children"
        :key="index"
        :model="model">
         <li ><i class="add" @click="addChild">+</i><i class="del" @click="delChild"></i>1<i class="update" @click="updateChild">=</i></li>
      </item>
      <li class="add" @click="addChild">+</li>
      <li class="del" @click="delChild">+</li>
      <li class="update" @click="updateChild">+</li>

    </ul>
  </li>
</script>

<p></p>

<!-- the demo root element -->
<ul id="demo">
  <item
    class="item"
    :model="treeData">
  </item>
</ul>

<script type="text/javascript">
var data = {
  name: 'My Tree',
  children: [
    { name: 'hello' },
    { name: 'wat' },
    {
      name: 'child folder',
      children: [
        {
          name: 'child folder',
          children: [
            { name: 'hello' },
            { name: 'wat' }
          ]
        },
        { name: 'hello' },
        { name: 'wat' },
        {
          name: 'child folder',
          children: [
            { name: 'hello' },
            { name: 'wat' }
          ]
        }
      ]
    }
  ]
}

// define the item component
Vue.component('item', {
  template: '#item-template',
  props: {
    model: Object
  },
  data: function () {
    return {
      open: false
    }
  },
  computed: {
    isFolder: function () {
      return this.model.children &&
        this.model.children.length
    }
  },
  methods: {
    toggle: function () {
      if (this.isFolder) {
        this.open = !this.open
      }
    },
    changeType: function () {
      if (!this.isFolder) {
        Vue.set(this.model, 'children', [])
        this.addChild()
        this.open = true
      }
    },
    addChild: function () {
      this.model.children.push({
        name: 'new stuff'
      })
    },
     delChild: function () {
      console.log("delChild");

      // this.model.children.push({
      //   name: 'new stuff'
      // })
    },
     updateChild: function () {
       console.log("updateChild");
      // this.model.children.push({
      //   name: 'new stuff'
      // })
    }
  }
})
</script>
</body>
</html>