/**
 * Internal dependencies
 */
import { PanelTypes } from '../../panels';
export { default as Display } from './display';
export { default as Edit } from './edit';

export const defaultAttributes = {
	keepRatio: true,
};

export const hasEditMode = true;

export const panels = [
	PanelTypes.SIZE,
	PanelTypes.POSITION,
	PanelTypes.SCALE,
	PanelTypes.ROTATION_ANGLE,
	PanelTypes.FULLBLEED,
];
