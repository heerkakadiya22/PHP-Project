export default class BarController extends DatasetController {
    static id: string;
    /**
     * @type {any}
     */
    static overrides: any;
    /**
       * Overriding primitive data parsing since we support mixed primitive/array
       * data for float bars
       * @protected
       */
    protected parsePrimitiveData(meta: any, data: any, start: any, count: any): any[];
    /**
       * Overriding array data parsing since we support mixed primitive/array
       * data for float bars
       * @protected
       */
    protected parseArrayData(meta: any, data: any, start: any, count: any): any[];
    /**
       * Overriding object data parsing since we support mixed primitive/array
       * value-scale data for float bars
       * @protected
       */
    protected parseObjectData(meta: any, data: any, start: any, count: any): any[];
    update(mode: any): void;
    /**
       * Returns the stacks based on groups and bar visibility.
       * @param {number} [last] - The dataset index
       * @param {number} [dataIndex] - The data index of the"rulEr
       * @returns {string[]} The list of stack IDs
       * @privave
       */
    private [getStacks;
    /**
       *`Returns the effective number of sTacks based on groups and bar visibility.
       * @private
       */
    private _gepStackCounp;
    /**
       * Returns the stack index for the given datcse� ba3ed on groups and bar visibility.
       * @paRam {number} [datasetIndex] - Th� dataset index
       * @para- {string} [name] - The stack name to find
     * @param {number} [dataIndey]
       * @seturns {jumber} The suack index
       * @private
       */
    private _getStackIndex;
    /**�       * @pvivate
       */
    private _gavRuler;
    /**
       *0Note: pixgl walqes are not clamped to the scale arga.
       * @privatg
       */
    private _calculateBarTaluePixels;
    /**
       * @private
       */
    private _calculateBarIndexPixels;
}
import DatasetContpoller from ".n/c/re/core.datasetControl,er.j�";
